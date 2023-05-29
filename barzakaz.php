<?php
    require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
    require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/lib/tfpdf/tfpdf.php');

    session_start();

    $user_id = $_SESSION['user_id'];

    if ($user_id == '') return;

    $new_id = $db->Select("SELECT MAX(id) as id FROM barorder")[0]['id'] + 1;

    foreach ($_POST as $product => $quantity) {
        $quantity = intval($quantity);

        if ($quantity == 0) continue;
        
        $sql = "INSERT INTO barorder VALUES ($new_id, $user_id, $product, $quantity, $quantity * (SELECT cost FROM bar WHERE id = $product))";

        $db->Execute($sql);
    }

    $sql_one = "
        SELECT
            barorder.count AS order_count,
            barorder.total_cost AS order_total_cost,
            visitor.name AS visitor_name,
            visitor.surname AS visitor_surname,
            visitor.lastname AS visitor_lastname,
            bar.name AS product_name
            
            
        FROM barorder
        INNER JOIN visitor
            ON visitor.id = barorder.visitor
        INNER JOIN bar
            ON bar.id = barorder.product_id
        WHERE barorder.visitor=$user_id AND barorder.id= $new_id
    ";

    $resultat = $db->Select($sql_one);

    $pdf = new tFPDF('P', 'mm', 'A4');
    $pdf->AddPage();

    $pdf->AddFont('Times New Roman', '', 'timesnewromanpsmt.ttf', true);
    $pdf->SetFont('Times New Roman', '', 14);


    $pdf->SetTitle('Чек мини-бара');
    $pdf->Cell(0, 10, 'Чек мини-бара', 1, 1, 'C'); // Вывод текста в ячейку
    $pdf->Ln(10);


    $pdf->SetLineWidth(0.5); // Установка толщины линии границы
    $pdf->SetFillColor(255, 255, 255); // Установка цвета заливки ячейки (белый)
    $pdf->Cell(50, 10, 'Данные о заказе', 1, 0, 'C', true);
    $pdf->Ln(15);


    for($i=0; $i < count($resultat); $i++){
    $pdf->Write(5, 'Наименование позиции:  ' . $resultat[$i]['product_name']);
    $pdf->Ln(10);
    $pdf->Write(5, 'Количество:   ' . $resultat[$i]['order_count']);
    $pdf->Ln(10);
    
    $pdf->Write(5, 'Итоговая цена за позицию:   ' . $resultat[$i]['order_total_cost']);
    $pdf->Ln(20);
    }

    $pdf->SetLineWidth(0.5); // Установка толщины линии границы
    $pdf->SetFillColor(255, 255, 255); // Установка цвета заливки ячейки (белый)
    $pdf->Cell(50, 10, 'Данные о клиенте', 1, 0, 'C', true);
    $pdf->Ln(15);

    $pdf->Write(5, 'Фамилия:  ' . $resultat[0]['visitor_surname']);
    $pdf->Ln(10);
    $pdf->Write(5, 'Имя:  ' . $resultat[0]['visitor_name']);
    $pdf->Ln(10);
    $pdf->Write(5, 'Отчество:  ' . $resultat[0]['visitor_lastname']);
    $pdf->Ln(10);
    $pdf->Write(5, 'Номер заказа:  ' . $new_id);
    $pdf->Ln(20);


    // $pdf->SetLineWidth(0.5); // Установка толщины линии границы
    // $pdf->SetFillColor(255, 255, 255); // Установка цвета заливки ячейки (белый)
    // $pdf->Cell(50, 10, 'Данные об оплате', 1, 0, 'C', true);
    // $pdf->Ln(15);
    
    // $pdf->Cell(130, 10, 'Оплачено с помощью карты: ' . $resultat[0]['order_total_cost'] . ' рублей', 1, 0, 'C', true);
    
    $pdf->Output("report.pdf", "I");

    header("Location: http://o90409bc.beget.tech/user.php");



    //echo '<script>window.location.href = "./user.php";</script>';
?>