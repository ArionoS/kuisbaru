describe('edit', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
        
    })
    it('Login', () => {
        cy.get('#username1').type('admin123')
        cy.get('#password1').type('admin123')
        cy.get('#login').click()
        // PROSES KEDUA
        cy.visit('http://127.0.0.1:8000/user/1/edit')
        cy.get('#name').type('Rakha')
        cy.get('#submit').click()
        })
  })
describe('Edit Profile', () => {
    afterEach(() => {
    cy.visit('http://127.0.0.1:8000/user/1/edit')
    })  
})  