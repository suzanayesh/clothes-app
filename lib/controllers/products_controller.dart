import 'package:get/get.dart';
import 'package:products/controllers/products_repository.dart';

class ProductsController extends GetxController {
  ProductsRepository productsRepository = ProductsRepository();
  RxBool loading = false.obs;//boolean type - GetX package
  List products = [].obs;
  var showGrid = false.obs;

  ProductsController() {
    loadProductsFromRepo();
  }

  loadProductsFromRepo() async {
    loading(true);
    products = await productsRepository.loadProductsFromApi();
    loading(false);
  }

  toggleGrid() {
    showGrid(!showGrid.value);
  }
}
