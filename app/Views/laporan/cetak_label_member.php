<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Label Member</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            background: #f0f0f0;
            padding: 15px;
        }

        .tombol-cetak {
            text-align: center;
            margin-bottom: 15px;
        }

        .tombol-cetak button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 30px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 5px;
        }

        .tombol-cetak button.btn-kembali {
            background-color: #6c757d;
        }

        .tombol-cetak button:hover {
            opacity: 0.85;
        }

        .judul-halaman {
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
            font-weight: bold;
        }

        .grid-label {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            max-width: 19cm;
            margin: 0 auto;
        }

        .label-member {
            background: white;
            border: 2px solid #333;
            border-radius: 4px;
            padding: 10px 12px;
            min-height: 5cm;
            page-break-inside: avoid;
        }

        .label-header {
            background-color: #1a3a5c;
            color: white;
            text-align: center;
            padding: 5px 4px;
            margin: -10px -12px 8px -12px;
            font-size: 10px;
            font-weight: bold;
        }

        .label-kode {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            border: 2px solid #333;
            padding: 4px;
            margin-bottom: 8px;
            letter-spacing: 2px;
            background-color: #fffde7;
        }

        .label-divider {
            border: none;
            border-top: 1px solid #999;
            margin: 6px 0;
        }

        .label-row {
            display: flex;
            margin-bottom: 3px;
            line-height: 1.4;
        }

        .label-key {
            font-weight: bold;
            min-width: 80px;
            flex-shrink: 0;
        }

        .label-sep {
            margin: 0 4px;
        }

        .label-val {
            word-break: break-word;
        }

        @media print {
            body {
                background: white;
                padding: 5mm;
            }

            .tombol-cetak {
                display: none;
            }

            .judul-halaman {
                display: none;
            }

            .grid-label {
                gap: 6mm;
                max-width: 100%;
            }

            .label-member {
                border: 1.5pt solid #000;
                break-inside: avoid;
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

    <div class="tombol-cetak">
        <button onclick="window.print()">Cetak / Simpan PDF</button>
        <button class="btn-kembali" onclick="window.close()">Tutup</button>
    </div>

    <div class="judul-halaman">
        Label Member — Dicetak: <?= date('d F Y, H:i') ?> WIB
        — Total: <?= count($members) ?> member
    </div>

    <div class="grid-label">

        <?php foreach($members as $member): ?>
        <div class="label-member">

            <div class="label-header">
                MEMBER CARD — LIBRARY INFORMATION SYSTEM
            </div>

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

            <div class="label-row">
                <span class="label-key">Join</span>
                <span class="label-sep">:</span>
                <span class="label-val"><?= $member['join_date'] ?></span>
            </div>

        </div>
        <?php endforeach; ?>

    </div>

    <script>
        window.onload = function () {
            window.print();
        };
    </script>

</body>
</html>