public class logicalOperators
{
	public static void main(String[] args)
	{
		// logical operators = used to connect two or more expressions
		//						&& (AND) both conditions must be true
		//						|| (OR)  either conditions must be true 
		//						!  (NOT) reverses boolean value of a condition 
		int temp=33;
		if(temp>30)
		{
			System.out.println("It is hot outside");	
		}
		else if((temp>=20)&&(temp<=30))
		{
			System.out.println("It is warm outside");
		}
		else
		{
			System.out.println("It is cold outside");
		}
	}// end main class
}// end class
