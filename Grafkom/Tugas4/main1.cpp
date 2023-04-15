#include <windows.h>
#include <string.h>
#include <stdarg.h>
#include <gl\glut.h>
#include <gl\glu.h>
#include <stdlib.h>

void mydisplay() {
	glClear(GL_COLOR_BUFFER_BIT);
	glBegin(GL_POLYGON);
	glColor3f(0,1,0);
	glVertex2f(-0.5,-0.5); glVertex2f(-0.75,0);
	glVertex2f(-0.5,0.5); glVertex2f(0.0,0.75);
	glVertex2f(0.5,0.5); glVertex2f(0.75,0);
	glVertex2f(0.5,0.5); glVertex2f(0.0,-0.75);
	glEnd();
	glFlush();
}

	int main (int argc, char** argv) {
		glutCreateWindow("Simple Polygon");
		glutDisplayFunc(mydisplay);
		glutMainLoop();
	}
