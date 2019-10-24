<?php

  class PropostaDAO {
    private $conexao;

    public function __construct() {
      $this->conexao = new Conexao();
    }

    public function cadastra($nome, $idade, $categoria_plano, $total) {
      $sql = "INSERT INTO proposta (nome,idade,categoria_plano,total) VALUES ('$nome','$idade','$categoria_plano','$total')";
      $executa = mysqli_query($this->conexao->getCon(), $sql);

      if(mysqli_affected_rows($this->conexao->getCon()) > 0) {
        return true;
      } else {
        return false;
      }
    }

  }
