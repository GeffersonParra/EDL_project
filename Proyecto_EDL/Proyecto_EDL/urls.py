from django.contrib import admin
from django.urls import path
from .views import Login, Home

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', Login),
    path("Home", Home)
]
