from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

def usuario_view(request):
    datos = {
        "nombre": "Laura",
        "apellidos": "Gómez Pérez",
        "dni": "12345678A",
        "email": "laura.gomez@example.com",
        "telefono": "654321987",
        "pagos": {
            "enero": 20,
            "febrero": 20,
            "marzo": 20,
            "abril": 0,
            "mayo": 20,
            "junio": 20,
            "julio": 20,
            "agosto": 0,
            "septiembre": 20,
            "octubre": 20,
            "noviembre": 20,
            "diciembre": 20
        }
    }
    html = f"""
    <html>
        <head><title>Datos de un Usuario</title></head>
        <body>
            <h1>Información personal</h1>
            <p><strong>Nombre:</strong> {datos['nombre']}</p>
            <p><strong>Apellidos:</strong> {datos['apellidos']}</p>
            <p><strong>Email:</strong> {datos['email']}</p>
            <p><strong>Teléfono:</strong> {datos['telefono']}</p>
            <h1>Pagos de la persona</h1>
    """
    for pago in datos['pagos']:
        html += f"""<p>{pago}: {datos['pagos'][pago]}"""

    html += f"""  
        </body>
    </html>
    """
    return HttpResponse(html)
