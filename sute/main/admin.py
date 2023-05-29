from django.contrib import admin
from .models import Sweater
from .models import Jacket
from .models import TShirt
from .models import Pants
from .models import Boots

admin.site.register(Sweater)
admin.site.register(Jacket)
admin.site.register(TShirt)
admin.site.register(Pants)
admin.site.register(Boots)
