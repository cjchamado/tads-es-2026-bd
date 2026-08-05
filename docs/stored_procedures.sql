-- Sem parâmetros
DELIMITER $$
CREATE PROCEDURE product_list_all()
BEGIN
SELECT id, name, price FROM products;
END $$
DELIMITER ;

-- Chamando
CALL product_list_all();
