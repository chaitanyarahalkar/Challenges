#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <sys/types.h>

#define BUFSIZE 148
#define FLAGSIZE 128

int flag(){
  char flag[48];
  FILE *file;
  file = fopen("flag.txt", "r");
  if (file == NULL) {
    printf("Flag File is Missing. Problem is Misconfigured, please contact an Admin if you are running this on the shell server.\n");
    exit(0);
  }

  fgets(flag, sizeof(flag), file);
  printf("%s", flag);
  return 0;
}

int main(int argc, char **argv){

  char password[64];
  char phrase[48];
  FILE *file;
  file = fopen("phrase.txt", "r");
  if (file == NULL) {
    printf("Flag File is Missing. Problem is Misconfigured, please contact an Admin if you are running this on the shell server.\n");
    exit(0);
  }

  fgets(phrase, sizeof(phrase), file);

  puts("Enter the password!");
  scanf("%s",password);
  if (!strcmp(phrase, password)) {
    flag();
  }
  else
  {
    puts("Incorrect password");
  } 
  return 0;
}
