<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SIZE CATERGORY CALCULATION</title>
    </head>
    <body>
        <h1>Volume Size Catergorise</h1>
        <form id="myform" onsubmit="calculateVolDensity()">
         <label for="width">Enter Width in Centimetres (cm)</label>
         <input type="number" name="width" id="width">
         <label for="length">Enter Length in Centimetres (cm)</label>
         <input type="number" name="length" id="length">
         <label for="height">Enter Height in Centimetres (cm)</label>
         <input type="number" name="height" id="height">
         <label for="mass">Enter Mass in kilograms (Kg)</label>
         <input type="number" name="mass" id="mass">
         
         <input type="hidden" name="volume" id="volume" value="" >
         <input type="hidden" name="density" id="density" value="" >
         <input type="submit" value="submit">
         <input type ="reset" value ="reset">
        </form>
          
        <script>
        function calculateVolDensity()
{
    var width = document.getElementById('width').value;
    var length = document.getElementById('length').value;
    var height = document.getElementById('height').value;
    var mass = document.getElementById('mass').value;
    
    
    /* calculate volume */
    result = width * length * height;
    result = result.toFixed(3);
    alert('result1 ='+result);
    var volume = parseFloat(result);
    alert('value of volume: ='+ volume);
    
     /* calculate density */
    result1 = mass / volume;
    result1 = result1.toFixed(3);
    alert('result1 ='+result1);
    var density = parseFloat(result1);
    alert('value of density: ='+ density);
    
    /* calculate size */
    /*  var    width,length,height,avg mass,max mass, volume, avg density max density */  
    
    var sizeNine  = [50,50,50,15,30,125000,0.00012,0.00024];
    var sizeEight = [40,40,40,12,14.9,64000,0.0001875,0.000234375];
    var sizeSeven = [35,35,35,10,11.9,42875,0.000233236,0.000279883];
    var sizeSix   = [30,30,30,8,9.9,27000,0.000296296,0.00037037];
    var sizeFive  = [25,25,25,6,7.9,15625,0.000384,0.000512];
    var sizeFour  = [20,20,20,4,5.9,8000,0.0005,0.00075];
    var sizeThree = [15,15,15,3,3.9,3375,0.000888889,0.001185185];
    var sizeTwo   = [10,10,10,2,2.9,1000,0.002,0.003];
    var sizeOne   = [5,5,5,1,1.9,125,0.008,0.0152];
    var sizeZero  = [2,2,2,0.5,0.9,8,0.0625,0.1125];
    
    alert('Mass '+mass);
    var size=10;
    
    if (mass >= sizeNine[3] && mass <= sizeNine[4] || volume >sizeEight[5])
        {
           size = 9;    
        }
    
    else if (mass >=sizeEight[3] && mass <= sizeEight[4] || volume > sizeSeven[5])
        {    
           size = 8;    
        }
      
    
    else if (mass >=sizeSeven[3] && mass <= sizeSeven[4] || volume > sizeSix[5])
        {    
           size = 7;    
        }  
    
    else if (mass >=sizeSix[3] && mass <= sizeSix[4] || volume > sizeFive[5])
        {    
           size = 6;    
        }
    
    else if (mass >=sizeFive[3] && mass <= sizeFive[4] || volume > sizeFour[5])
        {    
           size = 5;    
        }
    
    else if (mass >=sizeFour[3] && mass <= sizeFour[4] || volume > sizeThree[5])
        {   
           size = 4;    
        }
    
    else if (mass >=sizeThree[3] && mass <= sizeThree[4] || volume > sizeTwo[5])
        {    
           size = 3;    
        }
   
    else if (mass >=sizeTwo[3] && mass <= sizeTwo[4] || volume > sizeOne[5])
        {    
           size = 2;    
        }
    
    else if (mass >=sizeOne[3] && mass <= sizeOne[4] || volume > sizeZero[5])
        {    
           size = 1;    
        }
    
    else if (mass >=sizeZero[3] && mass <= sizeZero[4] || volume <= sizeZero[5])
        {    
           size = 0;    
        }   
    
    alert('size value =' +size);
    
    /* return values of volume and density and size to hidden inputs HTML form */
    document.getElementById('volume').value=volume;
    document.getElementById('density').value=density;
    document.getElementById('size').value=size;
  
}

        </script>
    </body>
       <?php
        // put your code here
        ?>
</html>
