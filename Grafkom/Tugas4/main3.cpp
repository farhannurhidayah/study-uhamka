#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdarg.h>
#include <GL/glut.h>

void mydisplay(){
    glClear(GL_COLOR_BUFFER_BIT);

 glBegin(GL_POLYGON);
  glColor3f(0, 1, 1);
  glVertex2f(-0.5, -0.5);
  glVertex2f(-0.75, 0);
  glVertex2f(-0.5, 0.5);
  glVertex2f(0, 0.75);
  glVertex2f(0.5, 0.5);
  glVertex2f(0.75, 0);
  glVertex2f(0.5, -0.5);
  glVertex2f(0,-0.75);
 glEnd();
 glFlush();
}
int main(int argc, char** argv){
 glutCreateWindow("Polygon Segi Delapan coded by KokoySitiKomariah");
 glutDisplayFunc(mydisplay);
 glutMainLoop();
}



