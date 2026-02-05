<?php

// TODO: Incluir arquivos necessários (globals, db, models, DAOs)
require_once("globals.php");
require_once("db.php");

require_once("models/Review.php");
require_once("models/Message.php");

require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");
require_once("dao/ReviewDAO.php");

// TODO: Criar instâncias das classes necessárias EX:
$message = new Message($BASE_URL); // Mostrar mensagens
$userDao = new UserDAO($conn, $BASE_URL); // Validar login
$movieDao = new MovieDAO($conn, $BASE_URL); // Buscar filmes
$reviewDao = new ReviewDAO($conn, $BASE_URL); // Salvar review

// TODO: Receber o tipo do formulário enviado pelo POST
$type = filter_input(INPUT_POST, "type"); // Importante frisar que podemos usar ela com varios tipos do input e seus nomes

// TODO: Resgatar dados do usuário logado
$userData = $userDao->verifyToken();

// TODO: Criar condicional para verificar se o formulário é de criação de review
if($type === "create") {

    // TODO: Receber os dados enviados pelo POST: rating, review, movies_id
    $rating = filter_input(INPUT_POST, "rating");
    $rating = filter_input(INPUT_POST, "review");
    $rating = filter_input(INPUT_POST, "movies_id");

    // TODO: Criar condicional para validar se todos os campos obrigatórios foram preenchidos
    // Se algum campo estiver vazio, mostrar uma mensagem de erro

    if($rating && $review && $moviesId){
        // Condicional para verificar se o filme existe no sistema
        $movieData = $movieDao->findById($movies_id);

        // Se o filme existir...
        if($movie){

            // Cria um novo objeto da classe Review
            $newReview = new Review();

            // Preenche os dados no objeto
            $newReview->rating = $rating;
            $newReview->review = $review;
            $newReview->moviesId = $moviesId;
            $newReview->usersId = $userData->id;

            // Chama o método que salva no banco
            $reviewDao->create($newReview);

            // Mostra a mensagem e redireciona
            $message->setMessage("Review criada com sucesso", "sucess", "movie.php?id=" . $moviesId);

        } else {
            // Se o filme não existir
            $message->setMessage("Filme não encontrado.", "error", "index.php");
        }
    }
    else{
        // Se algum campo estiver vazio
        $message->setMessage("Preencha todos os campos!", "error", "back");
    }
    
} else {

    // Se o tipo nao for "create"
    $message->setMessage("Tipo de formulário inválido.", "error", "index.php");

}
