<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="script.js" type="text/javascript"></script>
</head>
<body>

    <div id="main">
        <h1> loremipsum </h1>



<div class="boxe_timer">
            <form>
                <div id="horloge">...</div>
                <button id="tirage" ><a href="#id01"> On peut tirer</a></button>




                <script type="text/javascript">
                    function Timer() {
                        document.getElementById("horloge").style.display = 'contents';
                        document.getElementById("tirage").style.display = 'none';
                        var dt=new Date()
                        //document.getElementById("horloge").innerHTML=(24-dt.getHours())+":"+(59-dt.getMinutes())+":"+(59-dt.getSeconds());


                            document.getElementById("horloge").innerHTML = "Tirage dans " + (59 - dt.getSeconds()) + " secondes";


                            if(59-dt.getSeconds() === 0){
                                var monEvent=document.getElementById("horloge");
                                monEvent.style.display = 'none';
                                document.getElementById("tirage").style.display = 'contents';
                            }
                            else  setTimeout("Timer()", 1000);

                        }
                    Timer();


                        //console.log("Exécution de Timer()");


                </script>


            </form>
        </div>


        </div>




        <div class="ligne">
            <div class="bouton">

            </div>
            <div class="boites">


            </div>
            <div class="bouton">

            </div>

            <div id="data">


            </div>

            <div id="collection">

            </div>

        </div>



        <div>
            <p> loremipsum </p>
        </div>
    </div>



</body>

</html>