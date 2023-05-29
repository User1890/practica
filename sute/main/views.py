from django.shortcuts import render
from django.http import HttpResponse
from .models import Sweater
from .models import Jacket
from .models import TShirt
from .models import Pants
from .models import Boots


def index(request):
    return render(request, 'main/index.html')

def profile(request):
    return render(request, 'main/profile.html')

def prodList(request):
    prod = Sweater.objects.all()
    type = request.GET.get("type")
    if int(type) == 1:
        prod = TShirt.objects.all()
    elif int(type) == 2:
        prod = Sweater.objects.all()
    elif int(type) == 3:
        prod = Jacket.objects.all()
    elif int(type) == 4:
        prod = Pants.objects.all()
    else:
        prod = Boots.objects.all()
    return render(request, 'main/prodList.html', {'prod': prod, "type": type})

def product(request):
    type = request.GET.get("type")
    id_ = request.GET.get("id")
    if int(type) == 1:
        prod = TShirt.objects.filter(id=id_)
    elif int(type) == 2:
        prod = Sweater.objects.filter(id=id_)
    elif int(type) == 3:
        prod = Jacket.objects.filter(id=id_)
    elif int(type) == 4:
        prod = Pants.objects.filter(id=id_)
    else:
        prod = Boots.objects.filter(id=id_)
    return render(request, 'main/product.html', {'prod': prod})