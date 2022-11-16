<!DOCTYPE html>
<html>

<head>
    <title>Product Discount Calculator</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        main {
            display: block;
            width: 450px;
            margin: 0 auto;
            padding: 1em;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            margin-top: 0;
            color: navy;
        }

        label {
            width: 10em;
            float: left;
            padding-right: 1em;
            padding-bottom: .5em;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #data span {
            padding-left: .25em;
        }

        #buttons input {
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
</head>

<body>
    
    <main>
        <h1>Product Discount Calculator</h1>
        <form action="ch02_ex1_view.php" method="post">

            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_description"><br>

                <label>List Price:</label>
                <input type="text" name="list_price"><br>

                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"><span>%</span><br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount"><br>
            </div>

        </form>
    </main>
</body>

</html>