# **UT Health**

## **Proyecto Integradora I - T301**

### **UNIVERSIDAD TECNOLÓGICA DE LOS VALLES CENTRALES DE OAXACA**
![Logo UTVCO](https://i.imgur.com/aA85jNB.png?1) <img src="../images/logo-v1.png" width="175">

#### **EQUIPO 4:**

* **Hipólito Martínez Jesús         | @HM-JESUS02**
* **Meza Espina Erick Yahir         | @ErickYahirME**
* **Ortiz Pérez Natalia Adameli     | @mely12ortiz**
* **Ramírez Villanueva Luis Ángel   | @luisrmrz16**

#### **PROFESOR:**

* **M.D.G. Alejandro Jesús Morales Pérez**

#### TSU EN TECNOLOGÍAS DE LA INFORMACIÓN

---

## **CONTENIDO:**

### **1. [GENERALIDADES](#1)**

1. **[Planteamiento del problema](#1.1)**
2. **[Objetivo general del proyecto](#1.2)**
3. **[Metodología](#1.3)**
4. **[Antecedentes](#1.4)**
5. **[Asignación de roles y funciones a los integrantes](#1.5)**

### **2. [DESARROLLO DEL PROYECTO](#2)**

1. **[Estudio de factibilidad](#2.1)**
    1. **[Factibilidad técnica](#2.1.1)**
    2. **[Factibilidad operativa](#2.1.2)**
    3. **[Factibilidad económica](#2.1.3)**
2. **[Cronograma](#2.2)**
3. **[Requerimientos del sistema](#2.3)**
4. **[Stakeholders](#2.4)**
5. **[Estructura de almacenamiento de datos](#2.5)**
6. **[Instrucciones SQL](#2.6)**
7. **[Mapa de navegación del producto](#2.7)**
8. **[Entradas y salidas](#2.8)**
9. **[Validaciones](#2.9)**
10. **[Software de trabajo](#2.10)**

### **3. [CIERRE DE PROYECTO](#3)**

1. **[Matríz GQM](#3.1)**

---

## **DOCUMENTACIÓN**

<div id='1'/>

### **1. GENERALIDADES**

<div id='1.1'/>

### **1.1. Planteamiento del problema**
¿Como podemos tener un control y seguimiento de salud en el ingreso a instituciones y universidades para la nueva normalidad?

<div id='1.2'/>

### **1.2. Objetivo general del proyecto**
Nuestro objetivo es ayudar al personal de salud encargado del control de COVID-19 a tener una forma de dar seguimiento a los usuarios y así evitar la propagación del virus dentro la universidad o institución.

<div id='1.3'/>

### **1.3. Metodología**
#### **Metodología de cascada**
Existen muchos tipos de metodologías; tienen el fin de organizar a los equipos de trabajo para que estos desarrollen las funciones de un programa de la mejor manera posible. Nosotros elegimos la metodología de Cascada (Waterfall): consideramos utilizar esta metodología porque consiste en revisar cada etapa antes de continuar con la siguiente fase lo cual nos permite visualizar los resultados hasta que el proyecto tenga un avance de forma correcta.

<div id='1.4'/>

### **1.4. Antecedentes**
El 31 de diciembre de 2019, la Organización Mundial de la Salud (OMS) recibió reportes de presencia de neumonía, de origen desconocido, en la ciudad de Wuhan, en China. Rápidamente, a principios de enero, las autoridades de este país identificaron la causa como una nueva cepa de coronavirus.  

Según información de la OMS, el coronavirus se transmite por contacto de persona a persona con algún infectado (incluso si no presenta síntomas). Por ello, la mejor manera de evitar contraer este virus es siguiendo las buenas prácticas de higiene.  

La suspensión de clases por coronavirus se inició en México a partir del viernes 20 de marzo del 2020 hasta la fecha.  

El Director General del Instituto Estatal de Educación Pública de Oaxaca (IEEPO); Francisco Ángel Villarreal, dijo que:
> Se estima un regreso presencial, voluntario y paulatino a clases en las 13 mil escuelas de Oaxaca a partir del ciclo escolar 2021-2022, es decir a finales del mes de agosto.  

Basado en la investigación hecha para el anteproyecto y una entrevista con un profesional de la salud esperamos que nuestra idea de proyecto ayude a solucionar el problema planteado.

<div id='1.5'/>

### **1.5. Asignación de roles y funciones a los integrantes**

**Jesús Hipólito Martínez** es el analista en nuestro equipo y forma parte de los desarrolladores. El cómo analista del proyecto se encarga de la investigación, análisis y recopilación de la información, además supervisa los diversos documentos de la mano del líder y demás miembros del equipo. Como desarrollador se encarga de la estructuración en la programación del proyecto y escribe código eficiente. 

**Erick Yahir Meza Espina** es el principal desarrollar y maquetador del equipo. Como maquetador web es el encargado en traducir el diseño gráfico a HTML5 y a lenguaje de estilos CSS3 con el objetivo que los navegadores web interpreten correctamente todos los elementos y muestren al usuario el diseño propuesto por el diseñador y al ser a la vez desarrollador web complementa su trajo con código JavaScript.  

**Natalia Adameli Ortiz Pérez** es nuestra diseñadora y tester. Ella se encarga de generar un buen diseño de software, realizar y cumplir con las características de diseño que se requieren y darle una vestimenta adecuada a la interfaz del proyecto para lograr que sea un diseño atractivo, además en parte como tester se encarga de supervisar el desarrollo de software, así mismo realizar diferentes tipos de pruebas con el fin de encontrar el mínimo error, demostrar que las funciones del sistema funcionan correctamente y finalmente informar al resto del equipo los defectos encontrados o en su defecto demostrar que el software funciona eficazmente.  

**Luis Ángel Ramírez Villanueva** es el líder del equipo y programador ayudante. Al ser el líder se encarga de la organización del equipo, revisión de avances y como programador ayuda al resto de los desarrolladores con algunas dudas y escritura de código.

---

<div id='2'/>

### **2. DESARROLLO DEL PROYECTO**

<div id='2.1'/>

### **2.1. Estudio de factibilidad**

<div id='2.1.1'/>

#### **2.1.1. Factibilidad técnica**
| HERRAMIENTA O ELEMENTO A UTILIZAR | EN POSESIÓN |
| -- | -- |
| 4 equipos de computo | ✓ |
| Conexión a internet | ✓ |
| Energía eléctrica | ✓ |
| Servidor de pruebas | ✓ |

#### **ESPECIFICACIONES DE LAS PC DEL EQUIPO**

**PC de Jesús Hipólito**

- OS: Windows 8.1
- CPU: Pentium 2117U
- Arquitectura: 64 bits
- RAM: 4GB
- GPU: Intel HD Graphics
- Almacenamiento: 673 GB

| SOFTWARE | COMPATIBLE | NIVEL DE USO |
| -- | -- | -- |
| Visual Studio Code | ✓ | 50% |
| Git | ✓ | 0% |
| Angular | ✓ | 30% |
| Node.js | ✓ | 20% |
| DataGrip o Workbench | ✗ | 50% |
| Adobe XD | ✗ | 80% |
| Adobe Illustrator | ✓ | 80% |
| MS Word o G Docs | ✓ | 100% |

**PC de Erick Yahir**

- OS: Windows 10 Home
- CPU: Ryzen 3 3200G
- Arquitectura: 64 bits
- RAM: 16GB
- GPU: GTX 1050 TI
- Almacenamiento: 1 TB

| SOFTWARE | COMPATIBLE | NIVEL DE USO |
| -- | -- | -- |
| Visual Studio Code | ✓ | 60% |
| Git | ✓ | 30% |
| Angular | ✓ | 20% |
| Node.js | ✓ | 20% |
| DataGrip o Workbench | ✓ | 50% |
| Adobe XD | ✓ | 70% |
| Adobe Illustrator | ✓ | 80% |
| MS Word o G Docs | ✓ | 100% |

**PC de Adameli Ortiz**

- OS: Windows 10 Home Single Language
- CPU: AMD A8 7410
- Arquitectura: 64 bits
- RAM: 12GB
- GPU: Radeon R5
- Almacenamiento: 912 GB

| SOFTWARE | COMPATIBLE | NIVEL DE USO |
| -- | -- | -- |
| Visual Studio Code | ✓ | 50% |
| Git | ✓ | 30% |
| Angular | ✓ | 30% |
| Node.js | ✓ | 25% |
| DataGrip o Workbench | ✓ | 60% |
| Adobe XD | ✓ | 75% |
| Adobe Illustrator | ✓ | 70% |
| MS Word o G Docs | ✓ | 95% |

**PC de Luis Ramírez**

- OS: Manjaro Linux | Windows 10 Pro
- CPU: Core i5 6300U
- Arquitectura: 64 bits
- RAM: 16GB
- GPU: Intel HD Graphics 520
- Almacenamiento: 256 GB

| SOFTWARE | COMPATIBLE | NIVEL DE USO |
| -- | -- | -- |
| Visual Studio Code | ✓ | 80% |
| Git | ✓ | 50% |
| Angular | ✓ | 25% |
| Node.js | ✓ | 35% |
| DataGrip o Workbench | ✓ | 50% |
| Adobe XD | ✓ | 50% |
| Adobe Illustrator | ✓ | 75% |
| MS Word o G Docs | ✓ | 95% |

#### **CONCLUSIONES**  

1. ¿Tenemos todas las herramientas necesarias o al menos el 80% de ellas?
Si.
2. ¿Es fácil o posible obtener las herramientas que faltan?
Si, es posible.
3. ¿El equipo con el que cuenta el equipo es acorde para la realización del proyecto?
Si.
4. ¿Se puede conseguir otro equipo o utilizar simuladores?
5. ¿El equipo tiene los conocimientos necesarios para desarrollar el proyecto?
Si, en un 80%.
6. ¿Es posible aprender o buscar a alguien que pueda suplir los conocimientos que faltan?
Si, es posible aprender lo que falta.  

***De acuerdo a las respuestas de las preguntas podemos decir que este proyecto es factible técnicamente.***

<div id='2.1.2'/>

#### **2.1.2. Factibilidad operativa**
**Preguntas**  

1. ¿Existe alguna ley o reglamente en algún nivel de gobierno que afecte nuestro proyecto?
No.
2. ¿Se puede alterar la esencia del proyecto con esta ley?
No.
3. ¿El proyecto es moral y éticamente adecuado para el entorno?
Si.
4. ¿Se utilizará el proyecto en realidad?
Esperamos que si pueda ser utilizado.
5. ¿El público se muestra interesado en el proyecto?
Si.  

***De acuerdo a las respuestas de las preguntas podemos decir que este proyecto es factible operativamente.***

<div id='2.1.3'/>

#### **2.1.3. Factibilidad económica**
**Preguntas**  
1. ¿Cómo es la forma de obtener ingresos por este proyecto?
Donaciones.
2. ¿Cuánto y con que frecuencia se obtienen ingresos?
No tenemos datos, aun sin recibir.
3. ¿Cuál es el costo total del proyecto?
$2200 MXN
4. ¿Lo que vas a gastar en hacerlo, tiene un periodo de poder recuperarlo?
Si.
5. ¿Existe un beneficio fuera de lo económico que se aumente visiblemente con el proyecto?
Si, beneficiara el portafolio de los integrantes del equipo.  

***De acuerdo a las respuestas de las preguntas podemos decir que este proyecto es factible económicamente.***

<div id='2.2'/>

### **2.2. Cronograma**


![Cronograma de actividades](https://i.imgur.com/Ad9JYNr.png)

<div id='2.3'/>

### **2.3. Requerimientos del sistema**

#### **Requerimientos funcionales**
* Software para gestionar el registro de información del COVID-19 para la comunidad UTVCO y acceso mediante un logeo.
* Se gestionará un formulario para registrar la información de la comunidad UTVCO.
* El sistema tendrá una Base de Datos para almacenar la información de los estudiantes, profesores y demás personal, información la cual ayudará al personal médico a identificar posibles casos de COVID-19.

#### **Requerimientos no funcionales**
* Se implementará una página exclusiva para iniciar sesión para la comunidad UTVCO.
* El software contará con secciones secundarias, en la cual se mostrará; protocolos de la universidad, notificaciones para responder la encuesta, registro de datos, ficha médica  y configuración de la ficha médica.
* La página web se podrá visualizar solamente en dispositivos móviles.
* Creación de logotipo: el logotipo tendrá colores llamativos relacionados con los colores que identifican a la universidad UTVCO.
* La plataforma web sólo podrá visualizar y funcionar en dispositivos móviles.
* La página web se desarrollará con distintas aplicaciones y herramientas tecnológicas que estén al alcance de los conocimientos de los colaboradores.
* Debe contar con un protocolo de seguridad toda la información almacenada  en la base de datos.

<div id='2.4'/>

### **2.4. Stakeholders**

#### **Stakeholders primarios**

* Lider de proyecto: el coordinará y llevará el proyecto a un fin común.  
* Desarrolladores: llevarán todo lo que respecta  a la realización de la estructura de la programación.  
* Tester: se encargará de la planificación y a la ejecución de las pruebas correspondientes.  
* Analista: está a cargo de reunir toda la información necesaria para el proyecto.  
* Profesor de Integradora: él nos asesorará a lo largo del proyecto para un buen desarrollo.  
* Médico escolar: él nos ayudará con la información que crea necesaria para realizar el proyecto.
* Enfermera: nos ayudará con la coordinación en lo que necesitemos o necesite el doctor.  

#### **Stakeholders secundarios**

* Tutores: ellos serán los encargados de un buen control con sus estudiantes.  
* Estudiantes: nos serán de ayuda para tener un buen control acerca de su salud.
* Administrativos: nos ayudarán con la coordinación en cualquier tipo de caso.

<div id='2.5'/>

### **2.5. Estructura de almacenamiento de datos**

El procedimiento de la creación de la base de datos, fue la siguiente  basado en el modelo Entidad - Relación.

**Modelo Entidad - Relación:**


![Entidad - Relación](/images/entidad-relacion.png)


Estas son las relaciones entre las tablas (**Modelo Relacional**):


![Relacional](/images/relacional.png)


<div id='2.6'/>

### **2.6. Instrucciones SQL**

#### **Procedimiento 1: Creación de usuario**

Esta instrucción SQL la llamamos cuando un nuevo usuario se regitra, consiste en insertar los datos del usuario solicitados, mediante la pantalla de registro, en la base de datos en la tabla users.

![Procedimiento 1](/images/registro.png)

#### **Procedimiento 2: Acceso de usuario**

Este script es mucho más sencillo, ya que solo hace la consulta de nombre de usuario y contraseña a la base de datos en la tabla users, llamamos a este script cuando un usuario quiere iniciar sesión.

![Procedimiento 2](/images/login.png)

#### **Procedimiento 3 (vista): Perfil de usuario**

En este caso hacemos uso de una vista y no de un procedimiento, esto con el fin de mostrar la información del usuario en su página de perfil, con este codigo consultamos información de dos tablas al mismo tiempo en nuestra base de datos. 

![Procedimiento 3](/images/profile_view.png)


<div id='2.7'/>

### **2.7. Mapa de navegación del producto**

![Mapa de navegación](/images/mapa.png)


<div id='2.8'/>

### **2.8. Entradas y salidas**

### **Entradas**

| CLAVE | MÉTODO | NOMBRE | USUARIOS |
| -- | -- | -- | -- |
| E1 | Teclado | Información para registrar una cuenta | Comunidad UTVCO |

| DATOS | DESCRIPCIÓN | CODIFICACIÓN | VALIDACIÓN |
| -- | -- | -- | --|
| Email | Correo institucional del usuario | String, varchar(25) | Checar email |
| Nombre de usuario | Nombre de identificación del usuario | String, varchar(25) | Checar nombre de usuario |
| Contraseña | Combinación de caracteres o clave para la autenticación de acceso | String, varchar(50) | Checar contraseña |
| Nombre | Nombre completo | String, varcha(50) | Checar nombre |
| Apellidos | Apellido paterno y apellido materno | String, varchar(50) | Checar apellidos |
| Matrícula o número de control | Identificador personal en la universidad | String, varchar(10) | Checar matrícula o número de control |

---

| CLAVE | MÉTODO | NOMBRE | USUARIOS |
| -- | -- | -- | --|
| E2 | Teclado | Datos de inicio de sesión | Comunidad UTVCO |

| DATOS | DESCRIPCIÓN | CODIFICACIÓN | VALIDACIÓN |
| -- | -- | -- | --|
| Usuario | Nombre de identificación del usuario | String, varchar(25) | Checar nombre de usuario |
| Contraseña | Combinación de caracteres o clave para la autenticación de acceso | String, varchar(50) | Checar contraseña |

---

### **Salidas**

| CLAVE | NOMBRE | DISTRIBUCIÓN |
| -- | -- | -- |
| S1 | Registro de entrada | Interno |

| MÉTODO DE SALIDA | FRECUENCIA DE USO | USUARIOS | PROPÓSITO |
| -- | -- | -- | -- |
| En pantalla | Diariamente a la hora de ingreso al plantel | Personal escolar y alumnado | Llevar un registro del estatus de la comunidad UTVCO |

| CONTENIDO O COMPOSICIÓN | CODIFICACIÓN |
| -- | -- |
| Temperatura corporal | Ejemplo: 38.5°C |
| Síntomas | Ejemplo: Fiebre |
| Fecha de consulta | Ejemplo: 12/08/21 |

---

| CLAVE | NOMBRE | DISTRIBUCIÓN |
| -- | -- | -- |
| S1 | Ficha médica del estudiante | Interno |

| MÉTODO DE SALIDA | FRECUENCIA DE USO | USUARIOS | PROPÓSITO |
| -- | -- | -- | --|
| En pantalla | No controlado | Tutores y personal de salud | Identificar posibles casos de Covid-19 |

| CONTENIDO O COMPOSICIÓN | CODIFICACIÓN |
| -- | -- |
| Nombre del estudiante | Ejemplo: Luis Ángel |
| Apellidos del estudiante | Ejemplo: Ramírez Villanueva |
| Género | Ejemplo: Masculino |
| Tipo de sangre | Ejemplo: O+ |
| Estatura | 000 |
| Peso | 00.0 |
| ¿Tiene o a padecido Covid-19? | Ejemplo: No |
| ¿Padece de alguna enfermedad crónica? | Ejemplo: Migraña |
| ¿Padece de alguna discapacidad? | Ejemplo: Visual |
| Alergias | Ejemplo: Ninguna |

---

<div id='2.9'/>

### **2.9. Validaciones**

| VALIDACIÓN | CONDICIONES | CONTINGENCIA |
| -- | -- | -- |
| Checar email | - No dejar espacios. - Máximo 25 caracteres. - Campo obligatorio. - Incluir @. | "Favor de ingresar un correo valido" |
| Checar nombre de usuario | - Solo se admiten como máximo 25 caracteres. | "Nombre de usuario demasiado largo" |
| Checar contraseña | - Mínimo 10 caracteres. - Debe ser una combinación de letras, números y otros caracteres. | "Ingrese una contraseña más segura" |
| Checar nombre | - Solo se admiten letras. | "Datos erróneos: nombre" |
| Checar apellidos | -Solo se admiten letras. | "Datos erróneos: apellidos" |
| Checar matrícula o número de control | - Máximo 10 caracteres. | "Favor de ingresar una matrícula valida" |

---

<div id='2.10'/>

### **2.10. Software de trabajo**

- **EDITOR DE CÓDIGO: Visual Studio Code**

	Es un editor de código fuente que permite trabajar con diversos lenguajes de programación. Es gratuito, de código abierto y nos proporciona una utilidad para descargar y gestionar extensiones con las que podemos personalizar y potenciar esta herramienta.

	Esta herramienta la elegimos porque es un software libre, fácil, además que la mayoría de los colaboradores tienen conocimiento de uso de esta herramienta.

- **SISTEMA GESTOR DE BASE DE DATOS: MySQL**

	Es un gestor de bases de datos, y actualmente uno de los más usados y reconocidos del mercado. Está clasificada como la base de datos de código abierto más popular del mundo.

- **MANEJADOR DE LA BASE DE DATOS: DataGrip**

	Es una herramienta DBA multiplataforma que está dirigida a desarrolladores que trabajan con bases de datos SQL.

- **ALOJAMIENTO DEL REPOSITORIO: GitHub**

	Es una plataforma de gestión y organización de proyectos basada en la nube que incorpora las funciones de control de versiones de Git. Es decir que todos los usuarios de GitHub pueden rastrear y gestionar los cambios que se realizan en el código fuente en tiempo real, a la vez que tienen acceso a todas las demás funciones de Git disponibles en el mismo lugar.

	Decidimos elegir esta plataforma porque es fácil de usar y gratuita con la cual podemos trabajar todos los colaboradores.

- **SERVIDOR HTTP: Apache**

	Servidor web de código abierto y multiplataforma.

	Lo elegimos por ser fácil de configurar.

<div id='3'/>

### **3. CIERRE DE PROYECTO**

<div id='3.1'/>

### **3.1. Matríz GQM**

| GOAL | QUESTION | METRICS | ÓPTIMO | REAL |
| -- | -- | -- | -- | -- |
| | ¿Qué opinan los estudiantes de la plataforma? | 1.Satisfacción (%). 2.Facilidad de uso y navegación (%). 3.Efectividad (%). | 1. 100%. 2. 90%. 3. 90%. | |
| | ¿Qué tan agradable es el diseño? | 1.Impacto del usuario (%). 2.Aceptación del diseño del logo (%). 3.Diseño de los componentes (%). 4.Diseño de navegación. 5.Diseño estético (%). 6.Comprensibilidad (%). | 1. 100%. 2. 100%. 3. 90%. 4. 100%. 5. 90%. 6. 90%. | |
| Brindar apoyo al personal de salud a tener un control de la información de la comunidad UTVCO para evitar la propagación del COVID19. Mediante la gestión de un software de calidad. | Usabilidad de la plataforma | 1.Número de usuarios. 2.Satisfacción (%). 3.Efectividad (%). 4.Eficiencia de ejecución. 5.Facilidad de aprendizaje. | 1. 1500. 2. 100%. 3. 100%. 4. 100%. 5. 100%. | |
| | ¿Qué tan complejo es el desarrollo del software? | 1.Tiempo de entrega. 2.Líneas de código. 3.Rendimiento del software (%). | 1. 4 meses. 2. 1500. 3. 100%	| |
| | ¿Qué tan útil es el software? | 1.Reducción de trabajo al personal médico de la Universidad (%). | 1. 100% | |

---