# App for shipping price calculation

Specification:

- The calculation form should contain fields:
    -postcode, 
    - total order amount,
    - checkbox "long product".
- Postcode is a 5-digit number. A user mustn't enter an incorrect value.
- The shipping cost is based on zone, total order amount, and long product flag.
- Zone means the first two digits of the postcode (examples: “35463” -> zone “35”, “23456” -> zone “23”).
- User can import zones from CSV file and saves data in database; sample data are in zones.csv.
- If the total order amount is greater than 12500 € then we should add a 5% discount to the total shipping price.
- If we have a long product, we should add extra shipping cost - 1995€.


Tools requirements: 

- PHP 7 

- MySQL

- CakePHP (use as MVC solution).

## Steps to setup
- create db (I will send in email)
- go to localhost/orders/add

<p align="center">
    <a href="https://i.imgur.com/CWZY4Yw"><img src="https://i.imgur.com/CWZY4Yw.png" alt="image" border="0" /></a>
</p>
