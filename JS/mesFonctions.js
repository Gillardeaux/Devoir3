function afficherLesRegions()
{
    alert("Ça fonctionne");

        $.ajax
        (
            {
                type:"get",
                url:"index.php/Ctrl_Accueil/getAfficherLesRegions",
                success:function(data)
                {
                    $('#region').empty();
                    $('#region').append(data);
                },
                error:function()
                {
                    alert("Impossible de charger les regions");
                }
            }
        );
}