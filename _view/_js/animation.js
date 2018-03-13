$(document).ready(function(){

	// Quando clicar no botão para ESCONDER PERFIL do usuário
    $("#hideUserProfileBut").click(function(){
        
        // Esconde a caixa com perfil do usuário
        $(".user-profile-box").slideUp(300);

        // Mostra o nome do usuário, inicialmente escondido
        $("#hiddenProfileBar").show(300);

        // Esconde o botão de esconder perfil
        $("#hideUserProfileBut").hide();

        // Centraliza horizontal e verticalmente o botão de mostrar 
        // perfil do usuário
        var columnHeight = $("#buttonColumn").height();
        var columnWidth = $("#buttonColumn").width();
        $("#showButtonTable").height(columnHeight);
        $("#showButtonTable").width(columnWidth);
        
    });

    // Quando clicar no botão para MOSTRAR PERFIL do usuário
    $("#showUserProfileBut").click(function(){

		// Esconde a barra onde aparece o nome do usuário
        $("#hiddenProfileBar").hide(300);

        // mostra a caixa com perfil do usuário
        $(".user-profile-box").slideDown(300);

        // Mostra o botão de esconder perfil
        $("#hideUserProfileBut").show();
    
    });

});