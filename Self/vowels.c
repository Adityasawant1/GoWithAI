#include<stdio.h>
#include<ctype.h>
int main()
{
  FILE *fp;
  int count=0;
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
    ch=tolower(ch);
    
    if( ch=='a' ||ch=='e' || ch=='i' || ch=='o' || ch=="u")
    {
      count++;
    }
  }
  fclose(fp);
  printf("the file %s has %d vowels.\n",filename,count);
  return 0;
}
  
