-- use Edume;

create table payment_methods (

	payment_method_id int primary key identity(1, 1), 
	payment_method_name varchar(20) not null
)

