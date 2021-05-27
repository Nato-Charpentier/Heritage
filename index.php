
<div id="affiche">
</div>

<script src="jquery.js"></script>

<script>
    $(document).ready(function(){
        reponse = prompt('Veuiller entrer un prenom');
        getphrase(reponse);
    });

    function getphrase(reponse){
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: {
                'reponse': reponse
            },
            dataType: 'json',
            success: function(data) {
                $('#affiche').append(data);
            },
            error: function(){
                alert('error');
            }
        })
    };
</script>
