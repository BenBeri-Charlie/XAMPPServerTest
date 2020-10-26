<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .general{
            margin: 70px;
            width: calc(100% - 140px);
            position: absolute;
        }
        td{
            width: 70px;
            height: 7px;
            text-align: center;
            vertical-align: bottom;
        }
        table{
            position: relative;
            float: left;
        }
        .second{
            position: absolute;
            left: calc(50% - 70px);
        }
        .therd{
            position: absolute;
            top: 50px;
            right: 0;
        }
    </style>
</head>
<body>
    <div class="general">
        <table class="first" border="1" align="left" cellspacing="0">
            <tr>
                <td> 1 </td>
                <td rowspan="5"> 2 </td>
                <td> 3 </td>
            </tr>
            <tr>
                <td> 4 </td>
                
                <td> 5 </td>
            </tr>
            <tr>
                <td> 6 </td>
                
                <td> 7 </td>
            </tr>
            <tr>
                <td> 8 </td>
                
                <td> 10 </td>
            </tr>
            <tr>
                <td> 9 </td>
                
                <td> 11 </td>
            </tr>
            <tr>
                <td rowspan="4"> 12 </td>
                <td> 13 </td>
                <td rowspan="4"> 14 </td>
            </tr>
            <tr>
                <td> 15 </td>
            </tr>
            <tr>
                <td> 16 </td>
            </tr>
            <tr>
                <td> 17 </td>
            </tr>
            <tr>
                <td> 18</td>
                <td rowspan="3"> 21 </td>
                <td>22</td>
            </tr>
            <tr>
                <td> 19 </td>
                <td> 23 </td>
            </tr>
            <tr>
                <td> 20 </td>
                <td> 24 </td>
            </tr>
        </table>
        <table class="second" border="1"  cellspacing="0">
            <tr>
                <td colspan="2">1</td>
            </tr>
            <tr>
                <td>2</td>
                <td rowspan="5">7</td>
            </tr>
            <tr>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
            </tr>
            <tr>
                <td colspan="2">8</td>
            </tr>
        </table>
        <table class="therd" border="1" align="right" cellspacing="0">
            <tr>
                <td colspan="3">1</td>
            </tr>
            <tr>
                <td colspan="2">2</td>
                <td rowspan="2">3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td colspan="3">6</td>
            </tr>
            <tr>
                <td>7</td>
                <td>8</td>
                <td>9</td>
            </tr>
            <tr>
                <td colspan="3">10</td>
            </tr>
        </table>
    </div>
    
</body>
</html>