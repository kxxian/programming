#include <iostream>

int main()
{
	// memory address = a location in memory where data is stored 
	//					a memory address can accessed with & (address-of operator)
	
	std::string name = "monad";
	int age = 22;
	bool student = true;

	std::cout << &name << '\n';
	std::cout << &age << '\n';
	std::cout << &student << '\n';

	return 0;
}