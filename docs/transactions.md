```sql
INSERT INTO orders (
  customer_id,
  total,
  status
) VALUES (
  1,
  0,
  'open'
);

INSERT INTO order_items (
    order_id,
    product_id,
    product_name,
	  product_price,
    quantity
) VALUES (
    LAST_INSERT_ID(),
    1,
    'Voluptatibus quo culpa sequi voluptatem autem.',
    65,
    3
);

UPDATE products
SET stock = stock - 3
WHERE id = 1;
```
