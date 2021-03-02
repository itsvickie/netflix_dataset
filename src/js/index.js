$(document).ready(function(){
    $("#button").click(function(){
        $.ajax({
            type: 'POST',
            url: 'netflix.php',
            success: function(data){
                const dataset = JSON.parse(data);
                $("#type").text('Tipo: ' + dataset.type);
                $('#title').text('Título: ' + dataset.title);
                $('#director').text('Diretor: ' + dataset.director);
                $('#cast').text('Elenco: ' + dataset.cast);
                $('#country').text('País de Produção: ' + dataset.country);
                $('#date_added').text('Data Adicionada: ' + dataset.date_added);
                $('#release_year').text('Ano de Produção: ' + dataset.release_year);
                $('#rating').text('Pontuação: ' + dataset.rating);
                $('#duration').text('Duração: ' + dataset.duration);
                $('#listed_in').text('Gêneros: ' + dataset.listed_in);
                $('#description').text('Sinopse: ' + dataset.description);
            }
        });
    });
});