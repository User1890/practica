from django.urls import path
from . import views

app_name = 'app_first_test'

urlpatterns = [
    path('', views.index),
    path('prodList/', views.prodList),
    path('product/', views.product),
    path('profile/', views.profile),
]
