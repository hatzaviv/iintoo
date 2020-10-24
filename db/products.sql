

-- Populate the database

USE iintoo;

-- Insert the products

INSERT INTO products SET title='apple', price='500', description='Put it in your mouth, chew and swallow. Yummy.', image='https://s3-us-west-2.amazonaws.com/melingoimages/Images/4315.jpg', on_sale=TRUE, entered_on=NOW();
INSERT INTO products SET title='Darth Vader', price='2020', description='The force is strong with this one.', image='', on_sale=FALSE, entered_on=NOW();
INSERT INTO products SET title='Mirror', price='13.53', description='Look at how beautiful you are.', image='', on_sale=TRUE, entered_on=NOW();
INSERT INTO products SET title='Portal Gun', price='99999.99', description='Don\'t let Rick know you have it.', image='https://static1.funidelia.com/119256-f6_big2/funko-pop-zzw-portal-gun-rick-mwrty.jpg', on_sale=FALSE, entered_on=NOW();
INSERT INTO products SET title='Mystery', price='10.00', description='Mysterious.', image='https://allw.co/wp-content/uploads/2019/09/mysterybox.png', on_sale=FALSE, entered_on=NOW();



