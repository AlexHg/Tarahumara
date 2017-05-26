    <footer style="background:#2A605E;padding:50px 0px 15px 0px;">
        <div class="container">
            <div class="row" align="center" style="padding:0 20px;">
                <div class="col-md-3">
                    <img src="source/images/logo/logo-footer.png" style="margin-left: 1.5rem;" width="127" ><br>
                    <span style="color:white;">Consulte nuestro <br><a style="color:white;text-decoration:underline;" href="aviso-de-privacidad">Aviso de privacidad</a></span>
                </div>
                <div class="col-md-3">
                    <span class="whitefont4">
                        CREEL, CHIHUAHUA <br>
                        Benito Jurez 1272,<br>
                        Col. Ferrocarril<br>
                        C.P. 33200, Creel, Chihuahua. <br>
                        Tel./Fax: (635) 4560-240 <br>
                        (635) 4560-584 
                        <br><br>
                    </span>
                </div>
                <div class="col-md-3">
                    <span class="whitefont4">
                        MEXICO, D.F <br>
                        Xotepingo 48-Bis, Col. <br>
                        Ciudad Jardn<br>
                        C.P. 04370, Mxico, D.F.<br>
                        Tel./Fax: (55) 5549-9012 y<br>
                        (55) 5549-9019<br>
                        oficina.mexico@tarahumara.net
                        <br><br>
                    </span>
                </div>
                <div class="col-md-3">
                    <span class="whitefont4">
                        MONTERREY, N.L. <br>
                        Daniel Zambrano 518-8, <br>
                        Col. Chepe Vera <br>
                        C.P. 64030, Monterrey, N.L. <br>
                        Tel./Fax: (81) 8346-3977 <br>
                        y (81) 8347-5299 <br>
                        oficina.mty@tarahumara.net
                        <br><br>
                    </span>
                </div>
                
            </div>
            <div class="row whitefont4" style="margin-top:2rem;padding:0 20px;">
                <div class="col-md-6"  align="left">
                    Todos los derechos reservados 2016. Aviso de privacidad
                </div>
                <div class="col-md-6" align="right">
                    LADA SIN COSTO: 01800.08.02.44
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="source/bootstrap/js/bootstrap.min.js"></script>
    <script>
        window.location.hash = "";
        document.querySelector("#movile-nav").innerHTML = document.querySelector("#navigator").innerHTML+document.querySelector("#movile-nav").innerHTML
        document.querySelector("#movmenu").addEventListener("click", function(){
            console.log(document.querySelector("#movmenu").href)
            if(document.querySelector("#movmenu").dataset.href=="#movile-nav"){
                document.querySelector("#movmenu").href="#"
                document.querySelector("#movmenu").dataset.href="#"
            }else{
                document.querySelector("#movmenu").href="#movile-nav"
                document.querySelector("#movmenu").dataset.href="#movile-nav"
            }
        })
    </script>
  </body>
</html>