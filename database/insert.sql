
-- --- --- --- --- --- INI INSERT DE USUÁRIOS --- --- --- --- --- --- ---

insert into tbl_usuario
    (id_usuario, nome, sobrenome, cpf, telefone, imagem, email, senha, tipo)
    values
    (null, "ADM", "- Administrador", null, null, null, "adm", md5(1), 9);

insert into tbl_usuario
    (id_usuario, nome, sobrenome, cpf, telefone, imagem, email, senha, tipo)
    values
    (null, "Gabriel", "Bonfim", null, null, null, "gb@a.com", md5(123), 1);

insert into tbl_usuario
    (id_usuario, nome, sobrenome, cpf, telefone, imagem, email, senha, tipo)
    values
    (null, "Rafaela", "Henrique", null, null, null, "rh@a.com", md5(123), 1);

insert into tbl_usuario
    (id_usuario, nome, sobrenome, cpf, telefone, imagem, email, senha, tipo)
    values
    (null, "Artista", "Genérico", null, null, null, "artista", md5(123), 1);

insert into tbl_usuario
    (id_usuario, nome, sobrenome, cpf, telefone, imagem, email, senha, tipo)
    values
    (null, "Usuario", "Genérico", null, null, null, "usuario", md5(123), 1);

insert into tbl_usuario
    (id_usuario, nome, sobrenome, cpf, telefone, imagem, email, senha, tipo)
    values
    (null, "Tester", "Tester", null, null, null, "teste", md5(123), 1);


-- --- --- --- --- --- END INSERT DE USUÁRIOS --- --- --- --- --- --- ---




-- --- --- --- --- --- INI INSERT DE ESTAMPAS --- --- --- --- --- --- ---

insert into tbl_estampa
    (id_estampa, nome, descricao, imagem, comissao, tag, aprovacao, estampa_id_usuario)
    values
    (null, "O Creeper", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "img/estampa/4/creeper.png", 10, "Minecraft", 1, 4);

insert into tbl_estampa
    (id_estampa, nome, descricao, imagem, comissao, tag, aprovacao, estampa_id_usuario)
    values
    (null, "Macaco", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "img/estampa/4/macaco.png", 5, "Animal", 1, 4);

insert into tbl_estampa
    (id_estampa, nome, descricao, imagem, comissao, tag, aprovacao, estampa_id_usuario)
    values
    (null, "Cog", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "img/estampa/4/cog.png", 17, "Máquina", 0, 4);


-- --- --- --- --- --- END INSERT DE ESTAMPAS --- --- --- --- --- --- ---




-- --- --- --- --- --- INI INSERT DE TIPOS --- --- --- --- --- --- ---

insert into tbl_tipo
    (id_tipo, nome)
    values
    (null, "Camisa");

insert into tbl_tipo
    (id_tipo, nome)
    values
    (null, "Camiseta");

insert into tbl_tipo
    (id_tipo, nome)
    values
    (null, "Regata");

insert into tbl_tipo
    (id_tipo, nome)
    values
    (null, "Moletom");



-- --- --- --- --- --- END INSERT DE TIPOS --- --- --- --- --- --- ---




-- --- --- --- --- --- INI INSERT DE ESTOQUE --- --- --- --- --- --- ---

insert into tbl_estoque
    (id_estoque, cor, tamanho, material, quantidade, estoque_id_tipo)
    values
    (null, "Preto", "P", "Malha", 20, 1);

insert into tbl_estoque
    (id_estoque, cor, tamanho, material, quantidade, estoque_id_tipo)
    values
    (null, "Preto", "M", "Malha", 20, 1);

insert into tbl_estoque
    (id_estoque, cor, tamanho, material, quantidade, estoque_id_tipo)
    values
    (null, "Preto", "G", "Malha", 20, 1);

insert into tbl_estoque
    (id_estoque, cor, tamanho, material, quantidade, estoque_id_tipo)
    values
    (null, "Branco", "P", "Malha", 20, 1);

insert into tbl_estoque
    (id_estoque, cor, tamanho, material, quantidade, estoque_id_tipo)
    values
    (null, "Branco", "M", "Malha", 20, 1);

insert into tbl_estoque
    (id_estoque, cor, tamanho, material, quantidade, estoque_id_tipo)
    values
    (null, "Branco", "G", "Malha", 20, 1);


-- --- --- --- --- --- END INSERT DE ESTOQUE --- --- --- --- --- --- ---




-- --- --- --- --- --- INI INSERT DE PRODUTO --- --- --- --- --- --- ---

insert into tbl_produto
    (id_produto, datamod, nome, descricao, valor, imagem, produto_id_estampa, produto_id_tipo)
    values
    (null, now(), "Camisa - O Creeper", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 40, "img/produto/camisa/1/camisaocreeper.png", 1, 1);

insert into tbl_produto
    (id_produto, datamod, nome, descricao, valor, imagem, produto_id_estampa, produto_id_tipo)
    values
    (null, now(), "Camisa - Cog", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 40, "img/produto/camisa/2/camisacog.png", 3, 1);

insert into tbl_produto
    (id_produto, datamod, nome, descricao, valor, imagem, produto_id_estampa, produto_id_tipo)
    values
    (null, now(), "Camisa - Macaco", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 40, "img/produto/camisa/3/camisamacaco.png", 2, 1);

insert into tbl_produto
    (id_produto, datamod, nome, descricao, valor, imagem, produto_id_estampa, produto_id_tipo)
    values
    (null, now(), "Moletom - Macaco", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 90, "img/produto/moletom/4/moletommacaco.png", 2, 4);

insert into tbl_produto
    (id_produto, datamod, nome, descricao, valor, imagem, produto_id_estampa, produto_id_tipo)
    values
    (null, now(), "Moletom - O Creeper", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 90, "img/produto/moletom/5/moletomocreeper.png", 1, 4);

insert into tbl_produto
    (id_produto, datamod, nome, descricao, valor, imagem, produto_id_estampa, produto_id_tipo)
    values
    (null, now(), "Regata - O Creeper", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 30, "img/produto/regata/6/regataocreeper.png", 1, 3);

insert into tbl_produto
    (id_produto, datamod, nome, descricao, valor, imagem, produto_id_estampa, produto_id_tipo)
    values
    (null, now(), "Regata - Macaco", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 30, "img/produto/regata/7/regatamacaco.png", 2, 4);

insert into tbl_produto
    (id_produto, datamod, nome, descricao, valor, imagem, produto_id_estampa, produto_id_tipo)
    values
    (null, now(), "Moletom - Cog", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 90, "img/produto/moletom/8/moletomcog.png", 3, 4);


-- --- --- --- --- --- END INSERT DE PRODUTO --- --- --- --- --- --- ---