<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
            
            body{
                font-family: "Open Sans", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
                text-align: center;

            }
            table {
                width: 80%;
                border: 3px solid;
                border-collapse: collapse;

                margin: auto;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <h2>Simple Expense Tracking</h2>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check #</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <!-- YOUR CODE -->
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td><!-- YOUR CODE --></td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td><!-- YOUR CODE --></td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td><!-- YOUR CODE --></td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
