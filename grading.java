import java.util.Scanner;

public class grading
{
    public static void main(String args[])
    {
    	/* This program assumes that the student has 6 subjects,
    	 * thats why I have created the array of size 6. You can
    	 * change this as per the requirement.
    	 */
        int marks= 0;
        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter Marks of Subject: ");
        marks= scanner.nextInt();
        scanner.close();

		

        System.out.print("The student Grade is: ");
        if(marks>=80)
        {
            System.out.print("A");
        }
        else if(marks>=60 && marks<80)
        {
           System.out.print("B");
        } 
        else if(marks>=50 && marks<60)
        {
            System.out.print("C");
        }
        else if(marks>=40 && marks<50)
        {
            System.out.print("D");
        }
        else
        {
            System.out.print("F");
        }
    }
}