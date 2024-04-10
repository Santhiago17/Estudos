class Pessoa {
  constructor(nome, idade, cidade) {
    this.nome = nome;
    this.idade = idade;
    this.cidade = cidade;
  }

  apresentar() {
    console.log(
      "Olá, meu nome é: " +`${this.nome}` + "," + "Tenho" + " " + `${this.idade}` + "" + " anos de idade" + "," + "moro na cidade de " +`${this.cidade}`
    );
  }
}

let pessoa = new Pessoa('Santhiago', 23, 'João Pessoa');
pessoa.apresentar();
