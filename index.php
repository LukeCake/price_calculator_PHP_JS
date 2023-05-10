<!DOCTYPE html>
<html lang="cs">
<meta charset="UTF-8">
<title>Price Calculator</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
</style>
<script src=""></script>
<body>

    <form>

            <h1>Price Calculator</h1>

            <label for="item1" class="container">1 Kč
                <input type="checkbox" id ="item1" value="1">
                <span class="checkmark"></span>
            </label><br>

            <label for="item2" class="container">2 Kč
                <input type="checkbox" id ="item2" value="2">
                <span class="checkmark"></span>
            </label><br>

            <label for="item3" class="container">3 Kč
                <input type="checkbox" id ="item3" value="3">
                <span class="checkmark"></span>
            </label>

            <br><br>

            <select id="item" for="item4" class="container" name="XXX">
                <option value="10">10 Kč</option>
                <option value="20">20 Kč</option>
                <option value="30">30 Kč</option>
                <option value="40">40 Kč</option>
                <span class="checkmark"></span>
            </select> 

            <br><br>

            <input type="radio" id="html" name="fav_language" value="100">
            <label for="doma">100 Kč</label><br>
            <input type="radio" id="css" name="fav_language" value="200">
            <label for="vice">200 Kč</label><br>
            <input type="radio" id="javascript" name="fav_language" value="300">
            <label for="stridacka">300 Kč</label>

                
            <p id="total" class="priceInfo"></p>
           
            
            <div class= "buttonDiv">
                <input type="button" class="button" value="Count" id="calcButton">
            </div>

        

    </form>
    <script src="script.js"></script>
</body>
</html>