function afficherLesRegions()
{
    alert("Ça fonctionne");

        $.ajax
        (
            {
                type:"get",
                url:"index.php/Ctrl_Accueil/getAfficherLesRegions",
                data:"nomUser = " + $("#log").val(),
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
                data:"id="+id,
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

function ajouterScore(id)
{
    alert("Ça fonctionne encore");

        $.ajax
        (
            {
                type:"get",
                url:"index.php/Ctrl_Accueil/setScoreVille",
                data:"id="+id,
                success:function()
                {
                    alert("Score ajouté !")
                },
                error:function()
                {
                    alert("Impossible de changer le score des villes");
                }
            }
        )
}