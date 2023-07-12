#include <GL/gl.h>
#include <GL/glu.h>
#include <GL/glut.h>


void tangga(){
	glColor3d(0.69,0.69,0.69);
	glPushMatrix();
    glTranslated(20.0,-45.0,90.0); // penempatan object / perpindahan
    glScaled(5,4,4);
    glutSolidCube(10);
    glPopMatrix();
    
    
	glPushMatrix();
    glTranslated(20.0,-45.0,110.0); // penempatan object / perpindahan
    glScaled(5,3,1);
    glutSolidCube(10);
    glPopMatrix();
    
    glPushMatrix();
    glTranslated(20.0,-45.0,115.0); // penempatan object / perpindahan
    glScaled(5,2,1);
    glutSolidCube(10);
    glPopMatrix();
    
     glPushMatrix();
    glTranslated(20.0,-45.0,120.0); // penempatan object / perpindahan
    glScaled(5,1,1);
    glutSolidCube(10);
    glPopMatrix();
}


void pondasi() {
	  glColor3d(1,1,1);
    glPushMatrix();
        glTranslated(-30.0,-50.0,-50.0); // penempatan object / perpindahan
        glScaled(40.0,0.3,50.0);
        glutSolidCube(10);
    glPopMatrix();
}
    
void ubin() {
	  glColor3d(1,1,1); // angka putih
    glPushMatrix();
        glTranslated(20.0,-40.0,-80.0); // penempatan object / perpindahan
        glScaled(18.0,3,30.0);
        glutSolidCube(10);
    glPopMatrix();
}

void dinding() {
	  glColor3d(0.0,1.0,1.0);
    glPushMatrix();
        glTranslated(20.0,-20.0,-80.0); // penempatan object / perpindahan
        glScaled(17.0,7,29.0);
        glutSolidCube(10);
    glPopMatrix();
    
     glColor3d(1,1,1);
    glPushMatrix();
        glTranslated(20.0,70.0,-80.0); // penempatan object / perpindahan
        glScaled(20.0,12,30.0);
        glutSolidCube(10);
    glPopMatrix();
    
   glColor3d(0.69,0.69,0.69);
    glPushMatrix();
        glTranslated(-15,70.0,-70.0); // penempatan object / perpindahan
        glScaled(1.0,12,30.0);
        glutSolidCube(10);
    glPopMatrix();
    
    glColor3d(0.69,0.69,0.69);
    glPushMatrix();
        glTranslated(-35.0,70.0,-70.0); // penempatan object / perpindahan
        glScaled(1.0,12,30.0);
        glutSolidCube(10);
    glPopMatrix();
    
    
     glColor3d(0.69,0.69,0.69);
    glPushMatrix();
        glTranslated(-55.0,70.0,-70.0); // penempatan object / perpindahan
        glScaled(1,12,30.0);
        glutSolidCube(10);
    glPopMatrix();
    
    glColor3d(0.0,1.0,1.0); //hijau
    glPushMatrix();
        glTranslated(20.0,110.0,-70.0); // penempatan object / perpindahan
        glScaled(5,20,30.0);
        glutSolidCube(10);
    glPopMatrix();
}


void atap() {
    glColor3d(0,0,0);
    glPushMatrix();
        glTranslated(20.0,100.0,-80.0); // penempatan object / perpindahan
        glScaled(20.0,12,30.0);
        glutSolidCube(10);
    glPopMatrix();
    
    glPushMatrix();
        glTranslated(95.0,110.0,-79.0); // penempatan object / perpindahan
        glScaled(5,20,30.0);
        glutSolidCube(10);
    glPopMatrix();
}

void pintu() {
	 glColor3d(0.0,1.0,1.0);
	glPushMatrix();
    glTranslated(27.0,20.0,90.0); // penempatan object / perpindahan
    glScaled(7,2,9.0);
    glutSolidCube(10);
    glPopMatrix();
    
	glColor3d(0.69,0.69,0.69);
	glPushMatrix();
    glTranslated(20.0,-10.0,65.0); // penempatan object / perpindahan
    glScaled(5,4,0.2);
    glutSolidCube(10);
    glPopMatrix();
}
void jendela() {
	glColor3d(0.69,0.69,0.69);
	glPushMatrix();
    glTranslated(-20.0,-10.0,65.0); // penempatan object / perpindahan
    glScaled(2,3.5,0.2);
    glutSolidCube(10);
    glPopMatrix();
    
    	glPushMatrix();
    glTranslated(-45.0,-10.0,65.0); // penempatan object / perpindahan
    glScaled(2,3.5,0.2);
    glutSolidCube(10);
    glPopMatrix();
    
    	glPushMatrix();
    glTranslated(60.0,-10.0,65.0); // penempatan object / perpindahan
    glScaled(2,3.5,0.2);
    glutSolidCube(10);
    glPopMatrix();
    
    	glPushMatrix();
    glTranslated(85.0,-10.0,65.0); // penempatan object / perpindahan
    glScaled(2,3.5,0.2);
    glutSolidCube(10);
    glPopMatrix();
}
void listTingkat() {
	glColor3d(0.69,0.69,0.69);
    glPushMatrix();
        glTranslated(-80.0,120.0,-80.0); // penempatan object / perpindahan
        glScaled(1,0.5,30.0);
        glutSolidCube(10);
    glPopMatrix();
    
    	glColor3d(0.69,0.69,0.69);
    glPushMatrix();
        glTranslated(-80.0,90.0,-80.0); // penempatan object / perpindahan
        glScaled(1,0.5,30.0);
        glutSolidCube(10);
    glPopMatrix();
    
    	glColor3d(0.69,0.69,0.69);
    glPushMatrix();
        glTranslated(-80.0,60.0,-80.0); // penempatan object / perpindahan
        glScaled(1,0.5,30.0);
        glutSolidCube(10);
    glPopMatrix();
}
  
    




void display(){
    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

    glPushMatrix();
        tangga();
    glPopMatrix();
	
	glPushMatrix();
        pondasi();
    glPopMatrix();

    glPushMatrix();
        ubin();
    glPopMatrix();
    
    glPushMatrix();
        dinding();
    glPopMatrix();
    
    glPushMatrix();
    	pintu();
    glPopMatrix();

	glPushMatrix();
    	jendela();
    glPopMatrix();

	
	 glPushMatrix();
        atap();
    glPopMatrix();
    
     glPushMatrix();
        listTingkat();
    glPopMatrix();

    glFlush();
    glutSwapBuffers();
}


void init(){
    glClearColor(0.69, 0.69, 0.69, 0.69);

    const GLfloat light_ambient[] = { 0.1f, 0.1f, 0.1f, 1.0f };
    const GLfloat light_diffuse[] = { 0.75f, 0.75f, 0.75f, 1.0f };
    const GLfloat light_specular[] = { 1.0f, 1.0f, 1.0f, 1.0f };
    const GLfloat light_position[] = { 2.0f, 5.0f, 5.0f, 0.0f };

    const GLfloat mat_ambient[] = { 0.7f, 0.7f, 0.7f, 1.0f };
    const GLfloat mat_diffuse[] = { 0.8f, 0.8f, 0.8f, 1.0f };
    const GLfloat mat_specular[] = { 1.0f, 1.0f, 1.0f, 1.0f };
    const GLfloat high_shininess[] = { 100.0f };


    glEnable(GL_DEPTH_TEST);
    glEnable(GL_LIGHT0);
    glEnable(GL_NORMALIZE);
    glEnable(GL_COLOR_MATERIAL);
    glEnable(GL_LIGHTING);
    glShadeModel(GL_SMOOTH);

    glLightfv(GL_LIGHT0, GL_AMBIENT, light_ambient);
    glLightfv(GL_LIGHT0, GL_DIFFUSE, light_diffuse);
    glLightfv(GL_LIGHT0, GL_SPECULAR, light_specular);
    glLightfv(GL_LIGHT0, GL_POSITION, light_position);

    glMaterialfv(GL_FRONT, GL_AMBIENT, mat_ambient);
    glMaterialfv(GL_FRONT, GL_DIFFUSE, mat_diffuse);
    glMaterialfv(GL_FRONT, GL_SPECULAR, mat_specular);
    glMaterialfv(GL_FRONT, GL_SHININESS, high_shininess);
}
void reshape(int w, int h){
    glViewport(0,0, (GLsizei)w, (GLsizei)h);
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluPerspective(45.0, (double)w / (double)h, 1.0, 500.0);
    glTranslated(0.0, -45.0, -100.0);
//    gluLookAt(-150.0, 0.0, 10.0, 0.0, 0.0, 0.0, 0.0, 1.0, 0.0); // view arah samping
    gluLookAt(0.0, 0.0, 400.0, 0.0, 0.0, 0.0, 0.0, 1.0, 0.0); // normal
    glMatrixMode(GL_MODELVIEW);
}
//******************************************
//**************** fungsi keyboard *********************
void keyboard(unsigned char key, int x, int y){
    switch (key){
        case 'w':
        case 'W':
            glRotatef(-3.0, 1.0, 0.0, 0.0); // rotasi ke atas
        break;
        case 's':
        case 'S':
             glRotatef(3.0, 1.0, 0.0, 0.0); // rotasi ke bawah
        break;
        case 'd':
        case 'D':
            glRotatef(3.0, 0.0, 1.0, 0.0); // rotasi ke kanan
        break;
        case 'a':
        case 'A':
            glRotatef(-3.0, 0.0, 1.0, 0.0); //rotasi ke kiri
        break;
        case 'e':
        case 'E':
            glRotatef(-3.0, 0.0, 0.0, 1.0); //rotasi ke thd sumbu z / searah jarum jam
        break;
        case 'q':
        case 'Q':
            glRotatef(3.0, 0.0, 0.0, 1.0); //rotasi ke thd sumbu z / lawan arah jarum jam
        break;
        case 'j':
        case 'J':
            glTranslatef(1.0, 0.0, 0.0); //geser ke kanan
        break;
        case 'l':
        case 'L':
            glTranslatef(-1.0, 0.0, 0.0); //geser ke kiri
        break;
        case 'i':
        case 'I':
            glTranslatef(0.0, 0.0, 1.0); //geser ke depan
        break;
        case 'k':
        case 'K':
            glTranslatef(0.0, 0.0, -1.0); //geser ke belakang
        break;
        case 'h':
        case 'H':
            glTranslatef(0.0, 1.0, 0.0); //geser ke bawah
        break;
        case 'u':
        case 'U':
            glTranslatef(0.0, -1.0, 0.0); //geser ke atas
        break;
    }

    glutPostRedisplay();
}




//Pusat pemograman utama
int main (int argc, char** argv){
    glutInit(&argc, argv);
    glutInitWindowSize(1152, 680);
    glutInitWindowPosition(20, 10);
    glutInitDisplayMode(GLUT_DOUBLE | GLUT_DEPTH);
    glutCreateWindow("Project Glut Bangunan Rumah");
    glutDisplayFunc(display);
    glutReshapeFunc(reshape);
    glutKeyboardFunc(keyboard);
    init();
    glutMainLoop();
}
