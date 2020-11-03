create database bancofullstack;

create table produtos (
    id int not null primary key AUTO_INCREMENT,
    categoria varchar(60),
    descricao varchar(200),
    preco_antigo decimal(8,2),
    preco_atual decimal(8,2),
    img varchar(120),
    primary key (id)
);

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "panelas", 
        "Panela Eletrica de Arroz Mondial", 
        189.90,
        119.90, 
        ".\imagens\panelaep.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "panelas", 
        "Panela Eletrica de Arroz Mondial PE-10 700W", 
        199.90,
        149.99, 
        ".\imagens\panelaeb.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "liquidificadores", 
        "Liquidificador Mondial com Filtro Turbo L900FB com 5 Velocidades", 
        179.90,
        104.90, 
        ".\imagens\liquip.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "liquidificadores", 
        "Liquidificador Mondial Turbo L-1000 RI com 12 Velocidades", 
        159.90,
        105.90, 
        ".\imagens\liquiv.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "sanduicheiras", 
        "Sanduicheira e Grill Britania Crome 2P", 
        129.90,
        79.90, 
        ".\imagens\sandp.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "sanduicheiras", 
        "Sanduicheira Britania Bello Pane",
        129.90, 
        79.90, 
        ".\imagens\sandb.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "ventiladores", 
        "Ventilador de Mesa Mondial - 3 Velocidades", 
        209.90,
        169.00, 
        ".\imagens\ventp.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "ventiladores", 
        "Ventilador de Coluna Malory - 3 Velocidades", 
        249.90,
        179.90, 
        ".\imagens\ventp1.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "aspiradores", 
        "Aspirador de Po Britania Faciclean", 
        229.90,
        167.00, 
        ".\imagens\aspiradorp.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "aspiradores", 
        "Aspirador de Po Vertical Philco", 
        239.90,
        179.90, 
        ".\imagens\aspiradorp.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "centrifugas", 
        "Centrifuga de Roupas Britania 12Kg", 
        499.00,
        399.00, 
        ".\imagens\centrifugab.jpg");

insert into produtos(categoria, descricao, preco_antigo, preco_atual, img) 
    value(
        "centrifugas", 
        "Centrifuga de Roupas Mueller Super 5 kg", 
        449.00,
        349.00, 
        ".\imagens\centrifugap.jpg");


create table pedidos (
    id int not null primary key AUTO_INCREMENT,
    nome varchar(80) not null,
    endereco varchar(200) not null,
    telefone varchar(20) not null,
    produto varchar(80) not null,
    quantidade int not null
);

insert into pedidos(nome, endereco, telefone, produto, quantidade) 
value(
    "Viviane Silva", 
    "Av Conselheiro Ferraz n20", 
    "5555-9999",
    "Panela Eletrica Mondial",  
    2);

insert into pedidos(nome, endereco, telefone, produto, quantidade)  
value(
    "João Souza", 
    "Av Vinte Seis de Março n30",
    "4444-2222",
    "Liquidificador Mondial", 
    3);

insert into pedidos(nome, endereco, telefone, produto, quantidade)  
value(
    "Maria Andrade", 
    "Rua Campos Sales n40", 
    "4523-5252",
    "Sanduicheira Britania", 
    2);

insert into pedidos(nome, endereco, telefone, produto, quantidade)  
value(
    "Pedro Moreira", 
    "Rua Chaves n50", 
    "5656-8787",
    "Ventilador de Mesa Mondial", 
    2);

insert into pedidos(nome, endereco, telefone, produto, quantidade)  
value(
    "Angelica Silva", 
    "Rua Vinte Tres de Maio n30", 
    "42635698",
    "Aspirador de Po Britania Faciclean", 
    1);

insert into pedidos(nome, endereco, telefone, produto, quantidade)  
value(
    "Thiago Amorim", 
    "Rua Coronel Carlos Oliva n22", 
    "56238969",
    "Centrifuga de Roupas Britania 12kg", 
    1);
