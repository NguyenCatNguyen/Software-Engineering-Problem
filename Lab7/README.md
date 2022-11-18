## Software testing
- November 11, 2022
- Task: giving a function, answer the following questions
### Function
```java
class Liangquin {
public
    static int oddOrPos(int[] x){
        //Effects: if x == null throw NullPointerException
        //Else return the number of elements in x that
        //are either odd or positive(or both)
        int count = 0;
        for (int i = 0; i < x.length; i++){
            if (x[i] % 2 == 1|| x[i] > 0){
                count++;
            }
        }
        return count;
    }
public
    static void main(String[] args) {
        int[] x = {50};
        int count = oddOrPos(x);
        System.out.println(count);
    }
}
```
### Question
1. Is there a fault in the program? If so, locate it.
    - Yes, there is a fault in the program. The fault is in the line 9. The condition `x[i] % 2 = 1` would not work with negative numbers. 
2. If  possible, define a test case that does not execute the fault.
    - Input: `int [] x = null`
    - Expected output: `NullPointerException`
    - Actual output: `NullPointerException`
3. If possible, define a test case that executes the fault, but do not result in an error.
    - Input: `int[] x = {0}`
    - Expected output: `0`
    - Actual output: `0`
4. If possible, define a test case that results in an error, not failure.
    - It is impossible to define this test case that executes the fault, but do not result in an error.
5. If possible, define a test case that results in a failure.
    - Input: `int[] x = {-1, 0, 1}`
    - Expected output: `2`
    - Actual output: `1`