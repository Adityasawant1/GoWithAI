#include<stdio.h>
#include<ctype.h>
int main()
{
  FILE *fp;
  int count=0,word=0,line=0;
  char filename[1000];
  char ch;
  
  printf("\n Enter filename=");
  scanf("%s",filename);
  
  fp=fopen(filename,"r");
  
  if(fp==NULL)
  {
    printf("file could not found...!");
    return 1;
  }
  
  while((ch=fgetc(fp))!=EOF)
  {
    count++;
    if(ch==' ' || ch=='\n' )
    word++;
    
    if(ch=='\n')
    line++;
    
  }
  fclose(fp);
 printf("\n No of character=%d",count);
 printf("\n NO of word =%d",word);
 printf("\n No of line = %d",line);
 
  return 0;
}
  
