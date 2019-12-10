### FUNÇÃO PARA INTERNACIONALIZAÇÃO DE SISTEMAS
Quando fiz essa função, procurei por tudo como que funcionava, e achava apenas coisas complicadas de mexer, ou com muitos arquivos, extensões do PHP etc etc

Nenhum deles me atendia como eu precisava.

Então resolvi criar a minha própria função, simples, pequena, leve, descomplicada.
Trata-se de um arquivo simples em JSON onde podemos fazer nossa estrutura de maneira muito intuitiva.
Exemplo:

	{
	"inicio": {
		"topo": {
			"mainTitle": "",
			"buttons": {
				"category": "Categorias",
				"back": "Voltar",
				"addItem": "Add um ítem",
				"edit": ""
			},
			"topAlert": {
				"sucessDelete": "Ítem excluído com sucesso!"
			}
		}
	}

E para chamar uma string qualquer eu utilizo a string dessa maneira:

    echo getlang('inicio > topo > buttons > category'); // retorna "Categorias"

Nesse exemplo abaixo, eu estava utilizando uma [engine de template no PHP](https://github.com/agencia-feats/template)
![](https://raw.githubusercontent.com/agencia-feats/internacionalizacao/master/Screenshot.png?v=6)

Dessa maneira, basta organizar seus arquivos de tradução 
`pt-BR.json, en-US.json, es-PY.json`


# APROVEITEM!

