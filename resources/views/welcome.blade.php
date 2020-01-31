<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anime For All</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

</head>
<body>
    <script>
        //con JQuery
    $(document).ready(function() {
            //enlace donde se hace la petición ajax
           let enlaceDePeticion = 'https://animeflv.chrismichael.now.sh/api/v1'
           //enlace cortado para usar como terminacion de la peticion ajax
           let enlaceArreglado = enlaceDePeticion.slice(0,-6)
           console.log(enlaceArreglado)
           let SubEntradas

//cuando se pulsa el botón
                //recoge valores de los input
                
                //ejecuta el get, con los valores de los input para completar la url de la api
                $.get(enlaceDePeticion,function(data, status){
                    console.log("Data: "+data+"\nStatus: "+status)
                    console.log(data)
                    //muestra los resultados obtenidos por pantalla, 
                    document.getElementById('print').innerHTML+='animeflv'+'<br>'
                    document.getElementById('print').innerHTML+="Autor: "+data.author+"<br>";
                    entradas=data.entries
                    document.getElementById('print').innerHTML+='anime by state: '+entradas[0].AnimeByState+"<br>";
                    document.getElementById('print').innerHTML+='anime characters: '+entradas[0].AnimeCharacters+"<br>";
                    document.getElementById('print').innerHTML+='anime trailers: '+entradas[0].AnimeTrailers+"<br>"; //Camion-kun
                    document.getElementById('print').innerHTML+='genres: '+entradas[0].Genres+"<br>";
                    document.getElementById('print').innerHTML+='get anime servers: '+entradas[0].GetAnimeServers+"<br>";
                    document.getElementById('print').innerHTML+='latest anime added: '+entradas[0].LatestAnimeAdded+"<br>";
                    document.getElementById('print').innerHTML+='latest episode added: '+entradas[0].LatestEpisodesAdded+"<br>";
                    document.getElementById('print').innerHTML+='movies: '+entradas[0].Movies+"<br>";
                    document.getElementById('print').innerHTML+='ova: '+entradas[0].Ova+'<br>'
                    document.getElementById('print').innerHTML+='search: '+entradas[0].Search+"<br>";
                    document.getElementById('print').innerHTML+='special: '+entradas[0].Special+"<br>";
                    document.getElementById('print').innerHTML+='tv: '+entradas[0].TV+"<br>";
                    console.log(entradas[0].Ova)
                    /*for(let i=0;i<=entradas.length;i++){
                    //    SubEntradas=entradas[i]
                        document.getElementById('print').innerHTML+='<a href='+enlaceDePeticion+entradas[i].Ova+'>OVA</a>'
                        console.log(entradas[i].Ova)
                        
                    }*/
                    //document.getElementById('print').innerHTML+="Entradas: "+data.entries[0]+"<br>";

                   
                    document.getElementById('print').innerHTML+="Mensaje: "+data.message+"<br>";
                    
                })

/*let json
$.ajax({
    method: "GET",
    url: enlaceDePeticion,
    success: logueo(json),
    dataType: 'json'
})
function logueo(json){
    console.log(2)
    console.log(json)
}*/
    })//fin del document.ready
    </script>
    <input type="text" id="title" placeholder="Titulo aqui"/>
    <select>
        <option value="characters">Characters</option>
    </select> 
    <button>asdf</button>
    <p id="asdf"></p>
    <div id="print"></div>
</body>
</html>