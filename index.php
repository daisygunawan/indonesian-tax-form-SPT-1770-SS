<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <style>
        table {
            border-collapse: collapse;
            width: 25%; 
            margin: 20px auto;
            border: 3px solid #000000; 
        }
        th, td {
            padding: 10px;
            border: 3px solid #000000; 
        }
        th {
            text-align: center;
            font-weight: bold; 
        }
        td {
            text-align: left;
            border: 3px solid #000000;
        }
        td:nth-child(3) {
            text-align: center; /* Center-align the third column (Kode MK) */
        }
        .blue {
            color: #0c5ead; 
        }
    </style>
</head>
<body>
    
    <?php

    $data = [
        ['KEPERAWATAN MATERNITAS II', 'KEP14421'],
        ['KOMPUTER', 'KEP24226'],
        ['KEPERAWATAN HIV-AIDS', 'KEP14225'],
        ['KEPERAWATAN ANAK 1', 'KEP14423'],
        ['KEPERAWATAN KESEHATAN JIWA 1', 'KEP14424'],
        ['KEPERAWATAN MEDIKAL BEDAH II', 'KEP14422']
    ];

    echo "<table>";
    echo "<tr><th>No. Urut</th><th>Mata Kuliah</th><th>Kode MK</th></tr>";

    foreach ($data as $index => $row) {

        $noUrut = $index + 1;

        $mataKuliah = ucwords(strtolower($row[0]));

        $kodeMK = str_replace("KEP", "NRS", $row[1]);

        $fontColorClass = (strpos($mataKuliah, 'Keperawatan') !== false) ? 'class="blue"' : '';

        echo "<tr>
                <td>$noUrut</td>
                <td $fontColorClass>$mataKuliah</td>
                <td>$kodeMK</td>
              </tr>";
    }

    echo "</table>";
    ?>

</body>
</html>
