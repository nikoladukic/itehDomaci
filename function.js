
        document.getElementById("opis").addEventListener("click", ucitajOpis);

        function ucitajOpis() {
            var xmlhr = new XMLHttpRequest();
            xmlhr.open("GET", "opisLeka.txt", true);
        
            xmlhr.onload = function () {
                if (this.status == 200) {
                    document.getElementById("tekst").innerHTML = this.responseText; //ispisi taj tekst na stranici
                }
            };
        
            xmlhr.send();
        }
        
        //iz json
        document.getElementById("zaposleni").addEventListener("click", ucitajZaposlene);
        
        function ucitajZaposlene() {
            var xmlhr = new XMLHttpRequest();
            xmlhr.open("GET", "farmaceuti.json", true);
        
            xmlhr.onload = function () {
                if (this.status == 200) {
                    var farmaceuti = JSON.parse(this.responseText);
        
                    var output = "";
                    for (var i in farmaceuti) {
                        output +=
                            "<p>" +
                            farmaceuti[i].ime +
                            " " +
                            farmaceuti[i].prezime 
                        "</p>";
                    }
        
                    document.getElementById("tekst").innerHTML = output;
                }
            };
        
            xmlhr.send();
        }
        
        //refresh
        function odbrojavanje() {
        
            setTimeout(() => {
        
                location.reload();
        
        
        
            }, 5000)
        
        
        
        
        
        }