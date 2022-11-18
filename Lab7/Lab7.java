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
        //int[] x = {50};
        //int count = oddOrPos(x);
        System.out.println(oddOrPos(0.5));
    }
}
