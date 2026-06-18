<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Label — <?= $member['name_member'] ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            background: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .tombol-cetak {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tombol-cetak button {
            padding: 10px 25px;
            font-size: 13px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }

        .btn-print { background-color: #dc3545; }
        .btn-close { background-color: #6c757d; }

        .btn-print:hover { background-color: #c82333; }
        .btn-close:hover { background-color: #5a6268; }

        .info-cetak {
            font-size: 11px;
            color: #666;
            margin-bottom: 20px;
            text-align: center;
        }

        .label-member {
            background: white;
            border: 2px solid #333;
            border-radius: 6px;
            width: 10cm;
            min-height: 7cm;
            padding: 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .label-header {
            background-color: #1a3a5c;
            color: white;
            text-align: center;
            padding: 8px;
            font-size: 11px;
            font-weight: bold;
        }

        .label-body {
            padding: 14px 16px;
        }

        .label-kode {
            font-size: 26px;
            font-weight: bold;
            text-align: center;
            border: 2px solid #333;
            padding: 6px;
            margin-bottom: 12px;
            letter-spacing: 2px;
            background-color: #fffde7;
        }

        .label-divider {
            border: none;
            border-top: 1px solid #ccc;
            margin: 8px 0;
        }

        .label-row {
            display: flex;
            margin-bottom: 5px;
        }

        .label-key {
            font-weight: bold;
            min-width: 80px;
        }

        .label-sep {
            margin: 0 6px;
        }

        .label-val {
            color: #111;
        }

        .label-footer {
            background-color: #f8f8f8;
            border-top: 1px solid #ddd;
            text-align: center;
            padding: 6px;
            font-size: 10px;
            color: #888;
        }

        @media print {
            body {
                background: white;
                padding: 10mm;
            }

            .tombol-cetak,
            .info-cetak {
                display: none;
            }

            .label-member {
                box-shadow: none;
                border: 2pt solid #000;
            }

            .label-header,
            .label-kode {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>

<body>

    <!-- Tombol -->
    <div class="tombol-cetak">
        <button class="btn-print" onclick="window.print()">Cetak / PDF</button>
        <button class="btn-close" onclick="window.close()">Tutup</button>
    </div>

    <div class="info-cetak">
        Label Member — Dicetak: <?= date('d F Y, H:i') ?> WIB
    </div>

    <!-- LABEL -->
    <div class="label-member">

        <div class="label-header">
            MEMBER CARD — LIBRARY INFORMATION SYSTEM
        </div>

        <div class="label-body">

            <div class="label-kode">
                <?= strtoupper($member['code_member']) ?>
            </div>

            <hr class="label-divider">

            <div class="label-row">
                <span class="label-key">Nama</span>
                <span class="label-sep">:</span>
                <span class="label-val"><?= $member['name_member'] ?></span>
            </div>

            <div class="label-row">
                <span class="label-key">Email</span>
                <span class="label-sep">:</span>
                <span class="label-val"><?= $member['email_member'] ?></span>
            </div>

            <div class="label-row">
                <span class="label-key">No HP</span>
                <span class="label-sep">:</span>
                <span class="label-val"><?= $member['phone_member'] ?></span>
            </div>

            <div class="label-row">
                <span class="label-key">Alamat</span>
                <span class="label-sep">:</span>
                <span class="label-val"><?= $member['address_member'] ?></span>
            </div>

        </div>

        <div class="label-footer">
            ID Member: <?= $member['id_member'] ?>
        </div>

    </div>

    <script>
        window.onload = function () {
            window.print();
        };
    </script>

</body>
</html>