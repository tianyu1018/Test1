Page37
1<?php
 echo"hello world";
>
2  @test
  #include<stdio.h>
  #include<stdlib.h>
 void main(){
   int a[10];
  int maxAdd(int x[]);
  max=maxAdd(a);
 printf("%d",max);
  }
  int maxAdd(int x[]){  
   int i,j,temp;
 for(i=1;i<=10;i++){
   x[i-1]=(rand()%10);//0-10之间的随机数； 
  for(j=1;j<10;j++){
  if(!x[i-1]{ 
    if(x[i-1]>x[j]{
   temp=x[i-1];
   x[i-1]=x[j];
   x[j]=temp;
   }else{}
  }
   }
     }
      }
   return  (x[i-1]+x[i])       //c语言
}
3 @test
import java.Scanner.*;
public class testReverseString{
 public static void main(String[] args){
 Scanner input =new Scanner(System.in) 
  String str;
  input str =new input(nextLine);//如"how are you"
  rev=str.reverse();
  System.out.println("the reverse language is"+rev);
 
  }
   }                             //java语言
4 @test
  /* using System;
   *System.Windows.Forms.Form;
   *namespace dragHelloWorld{
   *class drag{
   * static void Main(string[] args){
   *}
   * }
   *   }
   */
 import java.awt.Dimension;
 import java.awt.Point;
  import java.awt.Toolkit;
  import java.awt.MouseInfo;
  import java.awt.AWTException;
  import java.awt.event.InputEvent;
  import javax.swing.*;
  
 public class MyMouseController{
     
     private Dimension dim; //存储屏幕尺寸
     private String str;//自动化对象
 
     public MyMouseController(){
         dim = Toolkit.getDefaultToolkit().getScreenSize();
         System.out.println("屏幕大小为：" + dim.getWidth() + " " + dim.getHeight());
         try{
             str ={"hello world"};;
         }catch(AWTException e){
             e.printStackTrace();
         }
     }
     
     public void Move(int width,int heigh){    //鼠标移动函数    
         System.out.println("enter Move()...");
         Point mousepoint = MouseInfo.getPointerInfo().getLocation();           
        System.out.println("移动前坐标：" + mousepoint.x + " " + mousepoint.y);
           width += mousepoint.x;
           heigh += mousepoint.y;
         try{
             str.delay(3000);
             str.mouseMove(width,heigh);
         }catch(Exception e){
             e.printStackTrace();
         }
         System.out.println("移动后坐标：" + width + " " + heigh);
         //str.mousePress(InputEvent.BUTTON1_MASK);//鼠标单击
     }
     
 
     public static void main(String args[])throws Exception{
         
         
         
         MyMouseController mmc = new MyMouseController();
         
         System.out.println("mouse control start:");
         mmc.Move(20,20);//坐标为相对坐标
         System.out.println("=======第二次移动=======");
         mmc.Move(512,384);
          
         System.out.println("mouse control stop.");
         
    }
 }
