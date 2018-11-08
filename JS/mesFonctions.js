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

function afficherLesVilles(id)
{
    alert("Ça aussi");

        $.ajax
        (
            {
                type:"get",
                url:"index.php/Ctrl_Accueil/getAfficherLesVilles",
                data:"id="+id ,
                success:function(data)
                {
                    $('#ville').empty();
                    $('#ville').append(data);
                },
                error:function()
                {
                    alert("Impossible de charger les villes");
                }
            }
        );
}