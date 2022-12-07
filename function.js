
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
                    <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                  
                    // var output = "";
                    // for (var i in farmaceuti) {
                    //     output +=
                    //         "<p>" +
                    //         farmaceuti[i].ime +
                    //         " " +
                    //         farmaceuti[i].prezime 
                    //     "</p>";
                    // }
        
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