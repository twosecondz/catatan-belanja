<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Belanjaku</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Borel&family=Comfortaa:wght@300;400;700&display=swap');
        @import url(https://pro.fontawesome.com/releases/v5.10.0/css/all.css);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-size: 1rem;
            font-family: 'Comfortaa', sans-serif;
            color: #283618;
            background-color: #fefae0;
        }

        .app {
            width: 70%;
            height: 100vh;
            margin: auto;
            display: grid;
            grid-template-rows: auto auto 1fr auto;
        }

        h1 {
            font-family: 'Borel';
            text-align: center;
            background-color: #283618;
            color: white;
            font-size: 6rem;
            padding: 4rem 0 1rem;
        }

        .add-form {
            background-color: #dda15e;
            padding: 2.8rem 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
        }

        .add-form h3 {
            margin-right: 2rem;
            font-size: 3rem;
        }

        .add-form div {
            margin: 1rem 0;
        }

        .add-form div select {
            margin-right: 1rem;
        }

        button,
        select,
        input {
            background-color: #fefae0;
            font-family: inherit;
            border: none;
            border-radius: 3rem;
            padding: 1.2rem 3.2rem;
            font-size: 2rem;
            cursor: pointer;
        }

        button {
            background-color: #283618;
            color: #fefae0;
            font-weight: bold;
        }

        .list {
            background-image: url(img/paper-bg.jpg);
            background-repeat: repeat-y;
            background-size: 155%;
            color: #fefae0;
            padding: 2.3rem 0 0;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            gap: 3.2rem;
            align-items: center;
            overflow-y: scroll;
        }

        .list ul {
            list-style: none;
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -1rem;
        }

        .list li {
            color: #283618;
            font-size: 4rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            margin-bottom: 3rem;
        }

        .list input[type='checkbox'] {
            height: 3rem;
            width: 3rem;
            accent-color: #283618;
            margin-right: 1.3rem;
        }

        .list li button {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 2.6rem;
            padding: 0;
            width: 3rem;
            height: 3rem;
            background-color: red;
            margin-left: 1rem;
        }

        .actions {
            background-color: #606c38;
            width: 100%;
            padding: 2rem 0;
            text-align: center;
        }

        .actions button,
        .actions select {
            padding: 0.8rem 2.4rem;
            font-size: 1.4rem;
            margin: 0 0.8rem;
        }

        .stats {
            background-color: #bc6c25;
            color: white;
            text-align: center;
            padding: 3.2rem 0;
            font-size: 2rem;
            font-weight: bold;
        }

        /* Navbar Bottom */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 400px;
            height: 70px;
            background: #FFFFFF;
            box-shadow: 0px 16px 24px 2px rgba(0, 0, 0, 0.14), 0px 6px 30px 5px rgba(0, 0, 0, 0.12), 0px 8px 10px -7px rgba(0, 0, 0, 0.2);
            border-radius: 40px 40px 0 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 0 20px;
            z-index: 10;
        }

        .icon {
            width: 24px;
            height: 24px;
            color: #BBBDC0;
        }

        .center-icon-wrapper {
            position: relative;
            width: 55px;
            height: 55px;
            background: #1976D2;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -20px;
            z-index: 20;
        }

        .center-icon {
            width: 24px;
            height: 24px;
            color: #FFFFFF;
        }

        /* Responsive */
        @media (max-width: 768px) {
            html {
                font-size: 40%;
            }
        }

        @media (max-width: 576px) {
            html {
                font-size: 40%;
            }
        }
    </style>
</head>

<body>
    <div class="app">
        <h1>Catatan Belanjaku 📝</h1>
        <form class="add-form">
            <h3>Hari ini belanja apa kita?</h3>
            <div>
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="text" placeholder="nama barang..." />
                <button type="submit">Tambah</button>
            </div>
        </form>
        <div class="list">
            <ul>
                <li>
                    <input type="checkbox" checked="true" />
                    <span style="text-decoration: line-through;">1 Kopi</span>
                    <button>&times;</button>
                </li>
                <li>
                    <input type="checkbox" />
                    <span>5 Gula Pasir</span>
                    <button>&times;</button>
                </li>
                <li>
                    <input type="checkbox" />
                    <span>3 Air Mineral</span>
                    <button>&times;</button>
                </li>
            </ul>
        </div>
        <div class="actions">
            <select>
                <option value="input">Urutkan berdasarkan urutan input</option>
                <option value="name">Urutkan berdasarkan nama barang</option>
                <option value="checked">Urutkan berdasarkan ceklis</option>
            </select>
            <button>Bersihkan Daftar</button>
        </div>
        <footer class="stats">Ada 10 barang di daftar belanjaan, 5 barang sudah dibeli (50%)</footer>
    </div>


    <script>
        const groceryItems = [{
                id: 1,
                name: 'Kopi Bubuk',
                quantity: 2,
                checked: true,
            },
            {
                id: 2,
                name: 'Gula Pasir',
                quantity: 5,
                checked: false,
            },
            {
                id: 3,
                name: 'Air Mineral',
                quantity: 3,
                checked: false,
            },
        ];
    </script>
</body>

</html>
