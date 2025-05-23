# Test Cases – Phương trình bậc hai `ax² + bx + c = 0`

## 1. Hai nghiệm phân biệt
- **Input**: `a = 1, b = -3, c = 2`  
- **Phương trình**: `x² - 3x + 2 = 0`  
- **Output dự kiến**: `x1 = 2`, `x2 = 1`

## 2. Nghiệm kép (hai nghiệm bằng nhau)
- **Input**: `a = 1, b = -2, c = 1`  
- **Phương trình**: `x² - 2x + 1 = 0`  
- **Output dự kiến**: `x = 1`

## 3. Vô nghiệm (Δ < 0)
- **Input**: `a = 1, b = 2, c = 5`  
- **Phương trình**: `x² + 2x + 5 = 0`  
- **Output dự kiến**: `Không có nghiệm thực`

## 4. Phương trình bậc nhất (a = 0)
- **Input**: `a = 0, b = 2, c = -4`  
- **Phương trình**: `2x - 4 = 0`  
- **Output dự kiến**: `x = 2`

## 5. Phương trình vô nghiệm (a = 0, b = 0, c ≠ 0)
- **Input**: `a = 0, b = 0, c = 3`  
- **Output dự kiến**: `Phương trình vô nghiệm`

## 6. Phương trình vô số nghiệm (a = 0, b = 0, c = 0)
- **Input**: `a = 0, b = 0, c = 0`  
- **Output dự kiến**: `Phương trình có vô số nghiệm`
